<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return "Welcome Laravel[GET]";
});

Route::get('/testPost',function(){
    $csrf_token = csrf_token();
    $form = <<<FORM
        <form action="/hello" method="POST">
            <input type="hidden" name="_token" value="{$csrf_token}">
            <input type="submit" value="Test">
        </form>
FORM;
    return $form;

});

Route::post('/hello',function(){
    return "Hello Laravel[POST]!";
});

/***
 * 路由命名:用关键字as来命名。
 */
Route::get('/hello/laravelAcademy',['as'=>'academy',function(){
    return "Hello LaravelAcademy!";
}]);
Route::get('/testNamedRoute',function(){
    return redirect()->route("academy");
});

/***
 *路由分组就是将一组拥有相同属性（中间件、命名空间、子域名、路由前缀等）的路由使用Route门面的group方法聚合起来
 */
Route::group(['middleware'=>'test:male'],function(){
    Route::get('/write/laravelAcademy',function(){
        //使用Test中间件
    });
    Route::get('/update/laravelAcademy',function(){
        //使用Test中间件
    });
});

Route::get('/age/refuse',['as'=>'refuse',function(){
    return "未成年人禁止入内!";
}]);
/***
 * 返回视图
 */

//通过response()函数的
Route::get('testResponseView',function(){
    $value = 'text/html;charset=utf-8';
    return response()->view('hello',['message'=>'Hello River'])->header('Content-type',$value);
});
Route::get("testViewHello",function(){
    return view("hello");
});
Route::get("testViewHome",function(){
    return view("home");
});

/**
 * 重定向到控制器动作
 */
Route::resource('post','PostController');
Route::get('testResponseRedirect',function(){
    return redirect()->action('PostController@index');
});


Route::resource('test','TestController');