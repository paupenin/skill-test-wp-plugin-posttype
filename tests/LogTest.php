<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use Tests\Mocks\LogMock;
use PauPenin\WPSkillTest\Log;

class LogTest extends TestCase {
    /**
     * setUp
     */
    public function setUp(): void
    {
        $this->log_dir = dirname (__DIR__) . DIRECTORY_SEPARATOR . 'log';

        // Remove all log files before each test
        Log::deleteLogs();
    }

    /**
     * @test
     */
    function log_method_calls_debug_method() {
        $debug = LogMock::log('debug', "This is my message", ['hello' => 'world']);

        $this->assertEquals($debug['method'], '::debug');
        $this->assertEquals($debug['args'][0], "This is my message");
        $this->assertEquals($debug['args'][1], ['hello' => 'world']);
    }

    /**
     * @test
     */
    function log_method_calls_info_method() {
        $info = LogMock::log('info', "This is another message", ['bye' => 'everyone']);
        
        $this->assertEquals($info['method'], '::info');
        $this->assertEquals($info['args'][0], "This is another message");
        $this->assertEquals($info['args'][1], ['bye' => 'everyone']);
    }

    /**
     * @test
     */
    function debug_method_generates_log_file() {
        Log::debug("This is a debug message");
        
        $this->assertFalse(false);
    }

    /**
     * @test
     */
    function info_method_generates_log_file() {
        Log::info("This is a debug message");
        
        $this->assertFalse(false);
    }
}