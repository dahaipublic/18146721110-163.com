<?php
/**
 * @param $num
 * @return array
 * 实现斐波那契数列,格式为:1,1,2,3,5,8…即当前数字为前两个数字之和.
 */

function serise($num)
{
    $befor = 0;    //第一个数
    $next = 1;    //第二个数
    echo $befor . ' ';
    echo $next . ' ';
    for ($i = 1; $i <= $num; $i++) {
        $i = $befor + $next;    //当前值等于前2个数相加
        $befor = $next;    //前一个值等于后一个值
        $next = $i;    //后一个值等于当前值
        if ($i < $num)    //斐波那契数列的范围
        {
            echo $i . ' ';
        } else {
            break;
        }
    }
}

$num = 100;

serise($num);
