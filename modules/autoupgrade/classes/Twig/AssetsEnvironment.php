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

namespace PrestaShop\Module\AutoUpgrade\Twig;

use PrestaShop\Module\AutoUpgrade\Router\UrlGenerator;
use Symfony\Component\HttpFoundation\Request;

class AssetsEnvironment
{
    const DEV_BASE_URL = 'http://localhost:5173';

    /** @var UrlGenerator */
    protected $urlGenerator;

    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function isDevMode(): bool
    {
        return !empty($_ENV['AUTOUPGRADE_DEV_WATCH_MODE']) && $_ENV['AUTOUPGRADE_DEV_WATCH_MODE'] === '1';
    }

    public function getAssetsBaseUrl(Request $request): string
    {
        if ($this->isDevMode()) {
            return self::DEV_BASE_URL;
        }

        return rtrim($this->urlGenerator->getShopAbsolutePathFromRequest($request), '/') . '/modules/autoupgrade/views';
    }
}
