<?php

    //静态变量 : 原理:系统在进行编译的时候就会对static这一行进行初始化,
    //          为静态变量赋值

    //定义函数
    function display() {
        $local = 1;   //局部变量
        static $count = 1;

        echo $local++,$count++,'<br/>';
    }

    // 调用函数         函数在调用的时候,会自动跳过static关键字这一行
    display();
    display();
    display();
