<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

declare(strict_types=1);

require_once(__DIR__ . '/../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use CodeMommy\TaskPHP\CSS;

/**
 * Class CSSTest
 */
class CSSTest extends TestCase
{
    /**
     * Minify Content Provider
     * @return array
     */
    public function minifyContentProvider()
    {
        return array(
            array('*{font-size:12px;}', '*{font-size:12px}')
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
        $this->assertEquals(trim($result), trim(CSS::minifyContent($testCase)));
    }
}