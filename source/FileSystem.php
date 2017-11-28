<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\TaskPHP;

/**
 * Class FileSystem
 * @package CodeMommy\TaskPHP
 */
class FileSystem
{
    /**
     * FileSystem constructor.
     */
    public function __construct()
    {
    }

    /**
     * Delete Directory
     * @param string $path
     */
    private static function deleteDirectory($path = '')
    {
        $directory = dir($path);
        while (($item = $directory->read()) !== false) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            $file = $directory->path . '/' . $item;
            if (is_dir($file)) {
                self::deleteDirectory($file);
            } else {
                unlink($file);
            }
        }
        $directory->close();
        rmdir($path);
    }

    /**
     * Remove
     * @param array|string $removeList
     * @return bool
     */
    public static function remove($removeList = array())
    {
        if (!is_array($removeList)) {
            $removeList = array($removeList);
        }
        foreach ($removeList as $value) {
            if (!empty($value)) {
                if (is_dir($value)) {
                    self::deleteDirectory($value);
                }
                if (is_file($value)) {
                    unlink($value);
                }
            }
        }
        return true;
    }
}
