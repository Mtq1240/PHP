<?php

    //数组
    $arr1 = array('1',2,'hello');
    var_dump($arr1);

    $arr3[] = 1;
    $arr3[10] = 100; 
    $arr3[] = '1';
    $arr3['key'] = 'key';
    $arr3[1] = 'value';     //数组下标的自增长性,从0开始自动增长,如果中间手动出现较大的,那么后面的自增长元素从最大的值+1开始 
    var_dump($arr3);

    //二维数组
    $arr = array(
        array('name' => 'Lily','age' => 20),
        array('name' => 'Tom','age' => 24),
        array('name' => 'Agee','age' => 23)
    );

    echo '<pre>';
    print_r($arr);

    //遍历数组 : foreach
    $arry = array(1,2,3,4,5,6,7,8,9,10);

    //foreach 循环
    foreach($arry as $v) {
        //$v随意命名
        echo $v, '<br/>';
    }

    foreach($arry as $k => $v) {
        //$v随意命名
        echo 'key:' ,$k,' == value:' ,$v,'<br/>';
    }

    //二维数组遍历
    $arr4 = array(
        0 => array('name' => 'Tom','age' => 30),
        1 => array('name' => 'Tom','age' => 20)
    );

    //通过foreach遍历一维数组
    foreach($arr as $value) {
        //1.可以继续遍历: 增加foreach遍历$value
        //2.可以使用下标访问
        echo 'name is:',$value['name'],'and age is:',$value['age'],'<br/>';
    }
