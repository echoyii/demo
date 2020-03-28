<?php
/**
 * File: index.php
 * Functionality:
 * Author: Li
 * Date: 2020/3/23
 */
namespace web\controller;
use core\View;

class Index{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }



    public  function show(){
//        echo 'this is a coposer study!!';
        return $this->view->make('index')->with('version','版本：1.0 copyright: echo LiLi');
    }

}