<?php
namespace Tests\Mocks;

use PauPenin\WPSkillTest\Log;

class LogMock extends Log
{
    public static function debug($msj, $data = [])
    {
        return [
            'method' => '::debug',
            'args' => func_get_args()
        ];
    }

    public static function info($msj, $data = [])
    {
        return [
            'method' => '::info',
            'args' => func_get_args()
        ];
    }
}
