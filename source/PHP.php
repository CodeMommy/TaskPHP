<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\TaskPHP;

/**
 * Class PHP
 * @package CodeMommy\TaskPHP
 */
class PHP
{
    /**
     * PHP constructor.
     */
    public function __construct()
    {
    }

    /**
     * Run
     * @param string $path
     * @return string
     */
    public static function run($path = '')
    {
        system(sprintf('start http://localhost'));
        if (empty($path)) {
            system(sprintf('php -S 0.0.0.0:80 -t %s', $path));
        } else {
            system(sprintf('php -S 0.0.0.0:80'));
        }
        return 'http://localhost';
    }
}
