<?php

//随机抽取1-100数字
$randNum = mt_rand(0,100);
echo "实际值为:{$randNum}\n";

function guess($randNum,$minNum,$maxNum,$guessNum=1){
    //二分查找,除以2
    $num = intval(($maxNum-$minNum)/2);
    //中间值不能直接比较,需要再加上最小值,例如50-100,(100-50)/2等于25,中间值是50+25等于75
    $guessValue = $num +$minNum;
    echo "猜测第{$guessNum}次:{$guessValue}\n";
    if ($guessValue==$randNum){
        return $randNum;
    }elseif ($guessValue>$randNum){
        //猜测值大于实际值
        return guess($randNum,$minNum,$guessValue,$guessNum+1);
    }elseif ($guessValue<$randNum){
        //猜测值小于实际值
        return guess($randNum,$guessValue,$maxNum,$guessNum+1);
    }
}

$num = guess($randNum,0,100);
echo "最终值:{$num}";
