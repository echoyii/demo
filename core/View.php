<?php
/**
 * File: View.php
 * Functionality: 视图核心类
 * Author: Li
 * Date: 2020/3/28
 */
namespace core;

class View {
    //模板文件
    protected $files;
    //模板变量
    protected $vars = [];
    public function make($file){
        $this->files = 'view/'.$file.'.html';
        return $this;
    }
    //分配变量
    public function with($name,$value){

        $this->vars[$name] = $value;
        return $this;

    }
    //此方法必须返回一个字符串，否则将发出一条 E_RECOVERABLE_ERROR 级别的致命错误
    public function __toString()
    {
        //extract() 函数从数组中将变量导入到当前的符号表。该函数使用数组键名作为变量名，使用数组键值作为变量值
        extract($this->vars);
        include $this->files;
        return '';
    }
}