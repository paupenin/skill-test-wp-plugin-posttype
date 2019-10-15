<?php

namespace PauPenin\WPSkillTest;

class Log
{
    /**
     * Instance (singleton)
     */
    protected static $_instance;

    /**
     * Logger
     */
    protected $logger;
    protected $log_file = 'log/monolog.log';

    /**
     * Constructor (singleton)
     */
    protected function __construct() {
        //
    }

    /**
     * Get instance
     */
    protected static function getInstance()
    {
        if (! self::$_instance) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    /**
     * Remove all log file
     */
    public static function deleteLogs()
    {
        if (! isset(self::getInstance()->logger)) return;

        // Close hanlders
        array_map(function($handler){
            $handler->close();
        }, self::getInstance()->logger->getHandlers());

        // Remove file
        $file = self::getInstance()->log_file;
        if (file_exists($file)) unlink($file);
    }

    /**
     * Log helper, calls other methods
     * 
     * @param string $type
     * @param string $msj
     * @param array $data
     */
    public static function log($type, $msj, $data = [])
    {
        if (method_exists(get_called_class(), $type)) {
            return call_user_func(array(get_called_class(), $type), $msj, $data);
        }
    }

    /**
     * debug
     * 
     * @param string $msj
     * @param array $data
     */
    public static function debug($msj, $data = [])
    {
        // self::getInstance()->logger
    }

    /**
     * info
     * 
     * @param string $msj
     * @param array $data
     */
    public static function info($msj, $data = [])
    {
        // self::getInstance()->logger
    }
}
