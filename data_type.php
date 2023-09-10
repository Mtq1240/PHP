<?php
    //数据类型
    //创建数据
    $a = '1bc1.1.1';
    $b = '1.1.1abc';

    //自动转换
    echo $a + $b;

    //强制转换
    echo '<br/>',(float)$a,(float)$b; //算数+运算, 系统先转换成数值类型(整形或浮点型)

    //判断数据类型
    echo '<hr/>';
    var_dump(is_int($a)); //false
    var_dump(is_string($b)); //true

    //Gettype(变量名):获取类型,得到的是该类型对应的字符串

    //Settype(变量名,类型):设定数据类型,与强制类型转换不同
    //1.强制转换(类型)变量名,是对数据值复制的内容进行处理(不会处理实际存储的内容)
    //2.settype会直接改变数据本身
    echo '<hr/>';
    echo gettype($a);

    //设置类型
    echo '<hr/>';
    var_dump(settype($b,'int'));//成功
    echo '<br/>';
    echo gettype($b),$b


?>