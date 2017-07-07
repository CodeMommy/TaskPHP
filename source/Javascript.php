<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\TaskPHP;

use MatthiasMullie\Minify\JS;

/**
 * Class Javascript
 * @package CodeMommy\TaskPHP
 */
class Javascript
{
    /**
     * @param $content
     * @return string
     */
    public static function minifyContent($content)
    {
        $minify = new JS();
        $minify->add($content);
        return $minify->minify();
    }
}