<?php

/**
 * @author Candison November <www.kandisheng.com>
 */

require_once(__DIR__ . '/../vendor/autoload.php');

use CodeMommy\TaskPHP\Task;

function demo()
{
    echo 'demo';
}

Task::config('Task Demo', '1.0.0');
Task::add('demo', 'Demo', 'demo');
Task::run();