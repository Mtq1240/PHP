<?php
    //定义函数
    function add($num1 = 0,$num2 = 0) {
        echo $num1 + $num2;
    }

    //调用函数
    $num1 = 10;
    add($num1,20);
    echo '<hr/>';


    //引用传值
    function display($num1,&$num2) { //对num2是取地址,改变地址的同时也改变了值
        $num1 = $num1 * $num1;
        $num2 = $num2 * $num2;

        echo $num1,'<br/>',$num2;
    }

    $num1 = 10;
    $num2 = 5;

    display($num1,$num2);

    echo '<hr/>',$num1,'<br/>',$num2;
?>
