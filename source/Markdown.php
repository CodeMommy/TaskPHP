<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\TaskPHP;

use League\CommonMark\CommonMarkConverter;

/**
 * Class Markdown
 * @package CodeMommy\TaskPHP
 */
class Markdown
{
    /**
     * @param $markdown
     * @return string
     */
    public static function toHTML($markdown)
    {
        $converter = new CommonMarkConverter();
        return $converter->convertToHtml($markdown);
    }
}