<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

declare(strict_types=1);

require_once(__DIR__ . '/../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use CodeMommy\TaskPHP\Javascript;

/**
 * Class JavascriptTest
 */
class JavascriptTest extends TestCase
{
    /**
     * Minify Content Provider
     * @return array
     */
    public function minifyContentProvider()
    {
        return array(
            array('alert("Hello World");', 'alert("Hello World")')
        );
    }

    /**
     * Test minifyContent
     * @dataProvider minifyContentProvider
     *
     * @param $testCase
     * @param $result
     */
    public function testMinifyContent($testCase, $result)
    {
        $this->assertEquals(trim($result), trim(Javascript::minifyContent($testCase)));
    }
}