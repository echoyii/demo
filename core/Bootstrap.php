<?php
/**
 * File: Bootstrap.php
 * Functionality:
 * Author: Li
 * Date: 2020/3/23
 */

namespace core;
//include "web/controller/index.php";
use web\controller;
class Bootstrap {
    public static function run(){
//        echo 33;
        self::parseUrl();
    }
    //分析url分发路由到控制器方法
    public static function parseUrl(){
//        dd($_SERVER);
        if (isset($_GET['s'])){
            $s_arr = explode('/',$_GET['s']);
            dd($s_arr);
            $class = "\\web\\controller\\".ucfirst($s_arr[0]);
            $action = $s_arr[1];
            (new $class())->$action();
        } else {

            $class = "\\web\\controller\\Index";
            $action = "show";
            (new $class())->$action();
        }
    }

}
