<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //视图间共享数据
        view()->share("siteName","FQ.com");

        //视图Composer
        /***
         * 有时候我们想要在每次师徒渲染时绑定一些特定数据到视图中比如登陆用户信息
         */
        view()->composer('hello',function($view){
            $view->with('user',array('name'=>'test','avatar'=>'/path/images/hah.jpg'));
        });
        ///也可以将数据分享给多个视图
        view()->composer(['hello','home'],function($view){
            $view->with('user',array('name'=>'test','avatar'=>'/path/images/hah.jpg'));
        });
        ///甚至所有视图 composer('*',function)



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
