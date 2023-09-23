<?php

    //可变函数
                    //将用户定义的一个函数传入到另外一个函数(函数名)去使用的过程,叫做 
                    //回调过程 , 而被传入的函数称之为 回调函数 
    //定义系统函数(假设)
    function sys_function($arg1,$arg2) {
        //第一个参数是函数,求第二个参数值的四次方
        $arg2 = $arg2 + 10;

        return $arg1($arg2);   //user_function(20)
    }

    function user_function($num) {
        return $num * $num * $num * $num;
    }

    //求10的四次方
    echo sys_function('user_function',10);