<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\TaskPHP;

/**
 * Class Console
 * @package CodeMommy\TaskPHP
 */
class Console
{
    /**
     * Console constructor.
     */
    public function __construct()
    {
    }

    /**
     * Print Line
     * @param string $text
     * @param string $type
     */
    public static function printLine($text = '', $type = 'normal')
    {
        $colorList = array(
            'normal' => '0',
            'information' => '1;34',
            'success' => '1;32',
            'warning' => '1;33',
            'error' => '1;31'
        );
        $color = isset($colorList[$type]) ? $colorList[$type] : $colorList['normal'];
        $string = sprintf('%s[%sm%s%s[0m%s', chr(27), $color, $text, chr(27), PHP_EOL);
        echo($string);
    }
}
