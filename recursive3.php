<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/24
 * Time: 18:33
 */

function test($a=0,&$result=array()){

    $a++;

    if ($a<10){

        $result[]=$a;

        test($a,$result);

    }

    echo $a."<hr>";

    return $result;

}

var_dump(test());
