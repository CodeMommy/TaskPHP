<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

declare(strict_types=1);

require_once(__DIR__ . '/../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use CodeMommy\TaskPHP\Markdown;

/**
 * Class MarkdownTest
 */
class MarkdownTest extends TestCase
{
    /**
     * Markdown Provider
     * @return array
     */
    public function markdownProvider()
    {
        return array(
            array('# Hello', '<h1>Hello</h1>')
        );
    }

    /**
     * Test toHTML
     * @dataProvider markdownProvider
     *
     * @param $testCase
     * @param $result
     */
    public function testToHTML($testCase, $result)
    {
        $this->assertEquals(trim($result), trim(Markdown::toHTML($testCase)));
    }
}