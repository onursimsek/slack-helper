<?php

if (!function_exists('slack')) {
    function slack()
    {
        return app(\SlackHelper\SlackHelper::class, [config('slack-helper')]);
    }
}