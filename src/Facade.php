<?php

namespace SlackHelper;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return SlackHelper::class;
    }
}
