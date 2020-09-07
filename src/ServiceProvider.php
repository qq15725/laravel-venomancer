<?php

namespace Wxm\LaravelVenomancer;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
use Wxm\LaravelVenomancer\Commands\Serve;
use Wxm\Venomancer\Application;

class ServiceProvider extends BaseServiceProvider
{
    protected $commands = [
        Serve::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // 发布配置
        $this->publishes([
            dirname(__DIR__) . '/config/venomancer.php' => function_exists('config_path')
                ? config_path('venomancer.php')
                : base_path('config/venomancer.php')
        ], 'config');

        // 注册视图
        $this->loadViewsFrom(dirname(__DIR__) . '/resources/views', 'venomancer');

        // 注册命令
        $this->commands($this->commands);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app instanceof LumenApplication) {
            $this->app->configure('venomancer');
        }

        $this->mergeConfigFrom(dirname(__DIR__) . '/config/venomancer.php', 'venomancer');

        $this->app->singleton('Venomancer', function () {
            return new Application(config('venomancer', []));
        });
    }
}
