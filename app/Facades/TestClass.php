<?php
/**
 * Created by PhpStorm.
 * User: Ada
 * Date: 2015/12/12
 * Time: 15:30
 */

/***
 * 这是一个静态指向Test类的门面类TestClass
 */
namespace App\Facades;

use Illuminate\Support\Facades\Facade;
class TestClass extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}