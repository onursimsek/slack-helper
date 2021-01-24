<?php

namespace SlackHelper;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    private $configPath = __DIR__ . '/../config/slack-helper.php';

    public function register(): void
    {
        $this->app->singleton(
            SlackHelper::class,
            function () {
                return new SlackHelper($this->app['config']->get('slack-helper'));
            }
        );

        $this->app->alias(SlackHelper::class, 'slack');
    }

    public function boot(): void
    {
        $this->publishes([$this->configPath => config_path('slack-helper.php')], 'config');
    }

    public function provides(): array
    {
        return [SlackHelper::class];
    }
}
