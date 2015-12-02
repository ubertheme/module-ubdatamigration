<?php

namespace Ubertheme\Ubdatamigration\Helper;

/**
 * Cache helper
 */
class File extends \Magento\Framework\App\Helper\AbstractHelper {

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\Config\CacheInterface $cache
     */
    public function __construct(
    \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public static function xcopy($source, $dest, $permissions = 0755) {
        // Check for symlinks
        if (is_link($source)) {
            return symlink(readlink($source), $dest);
        }

        // Simple copy for a file
        if (is_file($source)) {
            return copy($source, $dest);
        }

        // Make destination directory
        if (!is_dir($dest)) {
            mkdir($dest, $permissions);
        }

        // Loop through the folder
        $dir = dir($source);
        while (false !== $entry = $dir->read()) {
            // Skip pointers
            if ($entry == '.' || $entry == '..') {
                continue;
            }

            // Deep copy directories
            self::xcopy("$source/$entry", "$dest/$entry", $permissions);
        }

        // Clean up
        $dir->close();
        return true;
    }

}
