<?php

namespace Redis\Controller;

use Redis\Logic\RedisInstance;
use Think\Controller;

class IndexController extends Controller
{
    public function g()
    {
        $A = new RedisInstance();
//        var_dump($A::set("a","2017"));
        var_dump($A::get("a"));
        var_dump($A::subscribe(I("get.ch/s"),function ($a,$b,$c){
            var_dump(json_encode([$a, $b, $c]));
        }));
    }
    public function p(){
        $A = new RedisInstance();
        var_dump($A::publish(I("get.ch/s"), I("get.sv/s")));
    }
}