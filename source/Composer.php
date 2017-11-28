<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\TaskPHP;

/**
 * Class Composer
 * @package CodeMommy\TaskPHP
 */
class Composer
{
    /**
     * Composer constructor.
     */
    public function __construct()
    {
    }

    /**
     * Update Version
     * @param string $file
     * @return array|string
     */
    public static function updateVersion($file = '')
    {
        $composer = file_get_contents($file);
        $composer = json_decode($composer, true);
        $version = $composer['version'];
        $version = explode('.', $version);
        $version[2] = intval($version[2]) + 1;
        $version = implode('.', $version);
        $composer['version'] = $version;
        $composer = json_encode($composer, JSON_PRETTY_PRINT);
        $composer = str_replace('\\/', '/', $composer);
        file_put_contents($file, $composer);
        return $version;
    }
}
