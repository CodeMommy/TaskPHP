<?php

/**
 * CodeMommy TaskPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\TaskPHP;

/**
 * Class Task
 * @package CodeMommy\TaskPHP
 */
class Task
{
    private static $task   = array();
    private static $config = array();

    /**
     * Get Command
     * @return null
     */
    private static function getCommand()
    {
        if (isset($_SERVER['argv'][1])) {
            return $_SERVER['argv'][1];
        }
        return null;
    }

    /**
     * Default Task
     */
    private static function taskHelp()
    {
        if (!empty(self::$config)) {
            echo(sprintf('%s %s%s', self::$config['title'], self::$config['version'], PHP_EOL));
            self::line();
        }
        echo(sprintf('Tasks are:%s', PHP_EOL));
        self::line();
        ksort(self::$task);
        foreach (self::$task as $value) {
            echo(sprintf('%s - %s%s', $value[0], $value[1], PHP_EOL));
        }
    }

    /**
     * Get Parameter
     *
     * @param $number
     * @param string $default
     *
     * @return string
     */
    public static function getParameter($number, $default = '')
    {
        array_shift($_SERVER['argv']);
        array_shift($_SERVER['argv']);
        if (isset($_SERVER['argv'][$number])) {
            return $_SERVER['argv'][$number];
        }
        return $default;
    }

    /**
     * Line
     */
    public static function line()
    {
        echo(sprintf('--------------------%s', PHP_EOL));
    }

    /**
     * Config
     *
     * @param $title
     * @param $version
     */
    public static function config($title, $version)
    {
        self::$config['title'] = $title;
        self::$config['version'] = $version;
    }

    /**
     * Add
     *
     * @param $command
     * @param $about
     * @param $function
     */
    public static function add($command, $about, $function)
    {
        self::$task[strtolower($command)] = array($command, $about, $function);
    }

    /**
     * Run
     */
    public static function run()
    {
        self::add('help', 'Help', '');
        $command = strtolower(self::getCommand());
        if ($command == 'help') {
            self::taskHelp();
            return;
        }
        if (isset(self::$task[$command])) {
            $command = self::$task[$command][2];
            $command();
            return;
        }
        self::taskHelp();
    }
}