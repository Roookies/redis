<?php
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2017/9/12
 * Time: 下午5:57
 */

namespace Roookies;

use Illuminate\Support\ServiceProvider;

class RedisProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('redis', function () {
            return new RedisClient;
        });
    }
}