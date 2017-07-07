<?php

/**
 * @author Candison November <www.kandisheng.com>
 */

require_once(__DIR__ . '/../vendor/autoload.php');

use CodeMommy\TaskPHP\Task;

function test()
{
    echo 'test';
}

Task::config('Task Test', '1.0.0');
Task::add('test', 'Test', 'test');
Task::run();