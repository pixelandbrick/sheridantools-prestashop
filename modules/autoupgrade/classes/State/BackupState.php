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

namespace PrestaShop\Module\AutoUpgrade\State;

use PrestaShop\Module\AutoUpgrade\Backup\BackupFinder;
use PrestaShop\Module\AutoUpgrade\Parameters\UpgradeFileNames;

class BackupState extends AbstractState
{
    use ProgressTrait;

    /**
     * @var string
     */
    protected $backupName;
    /**
     * @var string
     */
    protected $backupFilesFilename;
    /**
     * @var string
     */
    protected $backupDbFilename;

    /**
     * @var ?int
     */
    protected $backupLoopLimit;
    /**
     * @var ?string the table being synchronized, in case mutiple requests are needed to sync the whole table
     */
    protected $backupTable;

    /**
     * Int during BackupDb, allowing the script to increent the number of different file names
     * String during step RestoreDb, which contains the file to process (Data coming from toRestoreQueryList).
     *
     * @var int Contains the SQL progress
     */
    protected $dbStep = 0;

    protected function getFileNameForPersistentStorage(): string
    {
        return UpgradeFileNames::STATE_BACKUP_FILENAME;
    }

    public function initDefault(string $currentVersion): void
    {
        $this->disableSave = true;
        $rand = dechex(mt_rand(0, min(0xffffffff, mt_getrandmax())));
        $date = date('Ymd-His');
        $backupName = 'V' . $currentVersion . '_' . $date . '-' . $rand;
        $this->setBackupName($backupName);

        $this->setBackupTable(null);
        $this->setBackupLoopLimit(null);
        $this->setDbStep(0);

        $this->disableSave = false;
        $this->save();
    }

    public function getBackupName(): string
    {
        return $this->backupName;
    }

    public function setBackupName(string $backupName): self
    {
        $this->backupName = $backupName;
        $this->backupFilesFilename = BackupFinder::BACKUP_ZIP_NAME_PREFIX . $backupName . '.zip';
        $this->backupDbFilename = BackupFinder::BACKUP_DB_FOLDER_NAME_PREFIX . 'XXXXXX_' . $backupName . '.sql';

        $this->save();

        return $this;
    }

    public function getBackupFilesFilename(): string
    {
        return $this->backupFilesFilename;
    }

    public function getBackupDbFilename(): string
    {
        return $this->backupDbFilename;
    }

    public function getBackupLoopLimit(): ?int
    {
        return $this->backupLoopLimit;
    }

    public function setBackupLoopLimit(?int $backupLoopLimit): self
    {
        $this->backupLoopLimit = $backupLoopLimit;
        $this->save();

        return $this;
    }

    public function getBackupTable(): ?string
    {
        return $this->backupTable;
    }

    public function setBackupTable(?string $backupTable): self
    {
        $this->backupTable = $backupTable;
        $this->save();

        return $this;
    }

    public function getDbStep(): int
    {
        return $this->dbStep;
    }

    public function setDbStep(int $dbStep): self
    {
        $this->dbStep = $dbStep;
        $this->save();

        return $this;
    }
}
