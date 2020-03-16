<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/2/24
 * Time: 18:29
 */


$i=1;

function call(){

    global $i;

    echo $i;

    $i++;

    if($i<=10){

        call();

    }

}

call();
