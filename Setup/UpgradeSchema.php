<?php
/**
 * Copyright © 2015 UberTheme. All rights reserved.
 */

namespace Ubertheme\Ubdatamigration\Setup;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Upgrade the Catalog module DB scheme
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.0.4', '<')) {
            $om = \Magento\Framework\App\ObjectManager::getInstance();
            $reader = $om->get('Magento\Framework\Module\Dir\Reader');
            $sourceDir = $reader->getModuleDir('', 'Ubertheme_Ubdatamigration') . '/lib/';
            if (is_dir($sourceDir)) {
                //we will update/save source of this lib at pub folder
                $pubDir = $om->get('Magento\Framework\Filesystem')->getDirectoryRead(DirectoryList::PUB);
                $toolDir = $pubDir->getAbsolutePath('ub-tool/');
                $helper = $om->get('Ubertheme\Ubdatamigration\Helper\File');
                //delete old source of tool
                $helper->rrmdir($toolDir);
                //copy new source of this tool
                $helper->xcopy($sourceDir, $toolDir, 0775);
                //delete source folders/files
                $helper->rrmdir($sourceDir);
            }
        }

        $setup->endSetup();
    }
}
