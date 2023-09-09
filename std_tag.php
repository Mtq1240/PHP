<html>
    <body>
        <b>
            <?php
                //脚本标记
                echo 'hello world';

                //定义变量
                $var1 = 1;
                echo '<br/>' , $var1;

                //删除变量
                unset($var1);
                echo  '<br/>' , $var1;

                //可变变量
                //定义两个变量
                $a = 'b';
                $b = 'bb';
                echo  $$a ,'<br/>';  //找到$a,解析结果:b
                                    //将前面的$符号与结果b绑定
                                    //然后解析$b

                //变量传值
                //值传递
                $a = 10;
                $b = $a;
                $b = 5;
                echo $a,$b,'<br/>';

                //引用传递
                $c = 10;
                $d = &$c;
                $d = 5;
                echo $c,$d,'<br/>'
            ?>
        </b>
    </body>
</html>