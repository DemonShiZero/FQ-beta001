<?php
/**
 * Created by PhpStorm.
 * User: Ada
 * Date: 2015/12/12
 * Time: 13:49
 */

namespace App\Services;
use App\Contract\TestContract;

class TestService implements TestContract
{
    public function callMe($controller)
    {
        dd('Call Me From TestServiceProvider In ' . $controller);
    }

}