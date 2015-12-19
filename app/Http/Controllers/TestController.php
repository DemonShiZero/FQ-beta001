<?php

namespace App\Http\Controllers;

use App\Contract\TestContract;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use APP;
use TestClass;
use DB;

class TestController extends Controller
{
    /***
     * 依赖注入
     */
    public function __construct(TestContract $test)
    {
        $this->test = $test;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        //
//        $test = App::make('test');
//        $test->callMe('TestController');
//        $this->test->callMe('TestController');
        //门面测试
//        TestClass::doSomething();
        //用DB门面对数据库进行原生查询
        $today = date("Y-m-d H:i:s");
//        $user = DB::select('select * from users where id = ?', [1]);
//        dd($user);
//        echo $today;
        //用DB门面来构造查询构建器
//        DB::table('users')->insert([
//            [
//                'id'    => 3,
//                'name  '=> 'Frank',
//                'email '=> 'frank@gmail.com',
//                'created_at' => $today,
//                'updated_at' => $today,
//                'password'   => '123456'
//            ]
//        ]);
        //插入数据后获取自增ID
//        $insertID = DB::table('users')->insertGetId([
//            'id'    => '4',
//            'name'  => 'Alex',
//            'email' => 'Alex@gmail.com',
//            'created_at' => $today,
//            'updated_at' => $today,
//            'password'   => '123456'
//        ]);
//        echo $insertID;
        //更新数据
//        $affedted = DB::table('users')->where('name','Alex')->update(['password'=>'777']);
//        echo $affedted;
//        //删除数据
//        $deleted = DB::table('users')->where('id', '>', '3')->delete();
/****
 * PHP基础部分
 */
//        echo "你是用的浏览器是" . $_SERVER['HTTP_USER_AGENT'] . ',别问我是怎么知道的，哥玩的是技术';
//        foreach ($_SERVER as $key => $value) {
//            echo $key . '=>' . $value;
//            echo "<br><br>";
//        }
//        echo (int)((0.1 + 0.7) * 10);
        $great = 'fantastic';
//        echo "This is { $great }";
        //用超出字串的下标写入字串时会转化成空格并在最后加上赋值的字符
//        $great[40] = 'H';
//        echo $great;
//        $great[-3] = 'S';
//        echo $great;
        $str  =  "\n" ;
        if ( ord ( $str ) ==  10 ) {
            echo  "The first character of \$str is a line feed.\n" ;
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
