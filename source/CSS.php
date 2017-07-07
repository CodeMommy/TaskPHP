<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\TaskPHP;

use MatthiasMullie\Minify\CSS as MinifyCSS;

/**
 * Class CSS
 * @package CodeMommy\TaskPHP
 */
class CSS
{
    /**
     * @param $content
     * @return string
     */
    public static function minifyContent($content)
    {
        $minify = new MinifyCSS();
        $minify->add($content);
        return $minify->minify();
    }
}