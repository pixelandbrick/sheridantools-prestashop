<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\AutoUpgrade;

use PrestaShop\Module\AutoUpgrade\Exceptions\DistributionApiException;
use PrestaShop\Module\AutoUpgrade\Exceptions\UpgradeException;
use PrestaShop\Module\AutoUpgrade\Models\PrestashopRelease;
use PrestaShop\Module\AutoUpgrade\Parameters\UpgradeConfiguration;
use PrestaShop\Module\AutoUpgrade\Services\DistributionApiService;
use PrestaShop\Module\AutoUpgrade\Services\PhpVersionResolverService;
use PrestaShop\Module\AutoUpgrade\UpgradeTools\Translator;
use PrestaShop\Module\AutoUpgrade\Xml\FileLoader;
use Symfony\Component\Filesystem\Filesystem;

class Upgrader
{
    const DEFAULT_CHECK_VERSION_DELAY_HOURS = 12;

    /** @var Translator */
    protected $translator;
    /** @var PrestashopRelease */
    private $onlineDestinationRelease;
    /** @var string */
    protected $currentPsVersion;
    /** @var PhpVersionResolverService */
    protected $phpVersionResolverService;
    /** @var UpgradeConfiguration */
    protected $updateConfiguration;
    /** @var Filesystem */
    protected $filesystem;
    /** @var FileLoader */
    protected $fileLoader;
    /** @var DistributionApiService */
    protected $distributionApiService;

    public function __construct(
        Translator $translator,
        PhpVersionResolverService $phpRequirementService,
        UpgradeConfiguration $updateConfiguration,
        Filesystem $filesystem,
        FileLoader $fileLoader,
        DistributionApiService $distributionApiService,
        string $currentPsVersion
    ) {
        $this->translator = $translator;
        $this->phpVersionResolverService = $phpRequirementService;
        $this->updateConfiguration = $updateConfiguration;
        $this->filesystem = $filesystem;
        $this->fileLoader = $fileLoader;
        $this->distributionApiService = $distributionApiService;
        $this->currentPsVersion = $currentPsVersion;
    }

    /**
     * @throws DistributionApiException
     * @throws UpgradeException
     */
    public function isLastVersion(): bool
    {
        if ($this->getDestinationVersion() === null) {
            return true;
        }

        return version_compare($this->currentPsVersion, $this->getDestinationVersion(), '>=');
    }

    /**
     * @throws DistributionApiException
     * @throws UpgradeException
     */
    public function isNewerVersionAvailableOnline(): bool
    {
        if ($this->getOnlineDestinationRelease() === null) {
            return false;
        }

        return version_compare($this->currentPsVersion, $this->getOnlineDestinationRelease()->getVersion(), '<');
    }

    /**
     * @throws DistributionApiException
     * @throws UpgradeException
     */
    public function getOnlineDestinationRelease(): ?PrestashopRelease
    {
        if ($this->onlineDestinationRelease !== null) {
            return $this->onlineDestinationRelease;
        }
        $this->onlineDestinationRelease = $this->phpVersionResolverService->getPrestashopDestinationRelease(PHP_VERSION_ID);

        return $this->onlineDestinationRelease;
    }

    /**
     * @return ?string Prestashop destination version or null if no compatible version found
     *
     * @throws DistributionApiException
     * @throws UpgradeException
     */
    public function getDestinationVersion(): ?string
    {
        if ($this->updateConfiguration->isChannelLocal()) {
            return $this->updateConfiguration->getLocalChannelVersion();
        } else {
            return $this->getOnlineDestinationRelease() ? $this->getOnlineDestinationRelease()->getVersion() : null;
        }
    }

    /**
     * @throws DistributionApiException
     * @throws UpgradeException
     */
    public function getLatestCompatibleModuleVersion(): string
    {
        $autoupgradeReleases = $this->distributionApiService->getAutoupgradeCompatibilities();

        if (empty($autoupgradeReleases)) {
            throw new UpgradeException($this->translator->trans('Unable to retrieve the recommended releases of Update Assistant.'));
        }

        $destinationVersion = $this->getDestinationVersion();

        $eligibleAutoupgradeReleases = array_filter($autoupgradeReleases, function ($autoupgradeRelease) use ($destinationVersion) {
            return $autoupgradeRelease->getPrestashopMinVersion() <= $destinationVersion && $autoupgradeRelease->getPrestashopMaxVersion() >= $destinationVersion;
        });

        $autoupgradeRelease = reset($eligibleAutoupgradeReleases);

        return $autoupgradeRelease ? $autoupgradeRelease->getRecommendedVersion() : '';
    }

    /**
     * delete the file /config/xml/$version.xml if exists.
     */
    public function clearXmlMd5File(string $version): void
    {
        $fileToRemove = _PS_ROOT_DIR_ . '/config/xml/' . $version . '.xml';
        if ($this->filesystem->exists($fileToRemove)) {
            $this->filesystem->remove($fileToRemove);
        }
    }
}
