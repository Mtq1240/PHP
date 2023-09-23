<?php

    $func = function() {
        echo 'hello word';
    };

    //调用匿名函数
    $func();

    //闭包函数
    function display() {
        //局部变量
        $name = __FUNCTION__;

        //定义匿名函数
        $innerfunction = function() use($name) { //use关键字就是将外部变量(局部) 保留给内部使用(闭包)
            //函数内部的函数
            echo $name;
        };

        //调用函数
        $innerfunction();
    }

    display();