<?php

namespace App\Providers;

use App\Services\TestService;
use Illuminate\Support\ServiceProvider;
use App\Facades\Test;
class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //使用singleton绑定单例
        $this->app->singleton('test',function(){
            //return new TestService();
            return new Test;
        });

        //使用bind绑定实例到接口以便依赖注入
        $this->app->bind('App\Contract\TestContract',function(){
            return new TestService();
        });
    }
}
