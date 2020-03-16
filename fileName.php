<?php

/**
 * @param $file_name
 * @return string
 * 使用五种以上方式获取一个文件的扩展名
 */

#备注: strrchr //找字符串在另一个字符串中最后一次出现的位置，并返回从该位置到字符串结尾的所有字符。
function get_ext1($file_name)
{
    return strrchr($file_name, '.');
}

#备注: strrpos //查找字符串在另一个字符串中最后一次出现的位置。

function get_ext2($file_name)
{
    return substr($file_name, strrpos($file_name, '.'));
}


#备注: end //取出数组中的最后一个元素。
#删除最后一个元素（出栈）:array_pop() 返回元素值并删除 也可以
function get_ext3($file_name)
{
    $arr = explode('.', $file_name);
    return end($arr);
}


#备注: pathinfo //以数组的形式返回文件路径的信息。
function get_ext4($file_name)
{
    $p = pathinfo($file_name);
    return $p['extension'];
}

#备注: strrev //反转字符串
#strpos//返回字符串在另一个字符串中第一次出现的位置。
function get_ext5($file_name)
{
    return strrev(substr(strrev($file_name), 0, strpos(strrev($file_name), '.')));
}

$url = 'fileName.php';
echo get_ext1($url).get_ext2($url).get_ext3($url).get_ext4($url).get_ext5($url);
