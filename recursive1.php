<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/24
 * Time: 17:55
 */


function call(){

    static $i = 0;

    echo $i . '';

    $i++;

    if($i<10){

        call();

    }

}



call();
