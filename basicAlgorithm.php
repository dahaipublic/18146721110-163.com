<?php

$arr = [1111,233,43,54,1,4,222,6666,2252,745,12121,9,33,65,21,67,2121,76];

/**
 * 二分算法查找
 * @param array $array 要查找的数组
 * @param int $min_key 数组的最小下标
 * @param int $max_key 数组的最大下标
 * @param mixed $value 要查找的值
 * @return boolean
 */
function bin_search($array, $min_key, $max_key, $value)
{
    if ($min_key <= $max_key) {
        $key = intval(($min_key + $max_key) / 2);
        if ($array[$key] == $value) {
            return true;
        } elseif ($value < $array[$key]) {
            return bin_search($array, $min_key, $key - 1, $value);
        } else {
            return bin_search($array, $key + 1, $max_key, $value);
        }
    } else {
        return false;
    }
}
//var_dump(bin_search($arr,1,1,4));

/**
 * @param $array
 * @param $i
 * @return mixed
 * 线性表的删除（数组中实现）
 */

function delete_array_element($array, $i)
{
    $len = count($array);
    for ($j = $i; $j < $len; $j++) {
        $array[$j] = $array[$j + 1];
    }
    array_pop($array);
    return $array;
}
var_dump(delete_array_element($arr));

/**
 * @param $str
 * @return int
 * 字符串长度
 */

function strlens($str)
{
    if ($str == '') return 0;
    $count = 0;
    while (1) {
        if ($str[$count] != NULL) {
            $count++;
            continue;
        } else {
            break;
        }
    }
    return $count;
}

/**
 * @param $str
 * @return int|string
 * 字符串翻转
 */

function strrevs($str)
{
    if ($str == '') return 0;
    for ($i = (strlen($str) - 1); $i >= 0; $i--) {
        $rev_str .= $str[$i];
    }
    return $rev_str;
}


/**
 * @param $s1
 * @param $s2
 * @return bool|int
 * 字符串比较
 */

function strcmps($s1, $s2)
{
    if (strlen($s1) < strlen($s2)) return -1;
    if (strlen($s1) > strlen($s2)) return 1;
    for ($i = 0; $i < strlen($s1); $i++) {
        if ($s1[$i] == $s2[$i]) {
            continue;
        } else {
            return false;
        }
    }
    return 0;
}

/**
 * @param $str
 * @param $substr
 * @return bool|int
 * 查找字符串
 */

function strstrs($str, $substr)
{

    $m = strlen($str);
    $n = strlen($substr);
    if ($m < $n) return false;
    for ($i = 0; $i <= ($m - $n + 1); $i++) {
        $sub = substr($str, $i, $n);
        if (strcmp($sub, $substr) == 0) return $i;
    }
    return false;

}

/**
 * @param $substr
 * @param $newsubstr
 * @param $str
 * @return bool|string
 * 字符串替换
 */


function str_replaces($substr, $newsubstr, $str)
{
    $m = strlen($str);
    $n = strlen($substr);
    $x = strlen($newsubstr);
    if (strchr($str, $substr) == false) return false;
    for ($i = 0; $i <= ($m - $n + 1); $i++) {
        $i = strchr($str, $substr);
        $str = str_delete($str, $i, $n);
        $str = str_insert($str, $i, $newstr);

    }
    return $str;
}

/**
 * @param $str
 * @param $i
 * @param $substr
 * @return string
 * 插入一段字符串
 */
function str_insert($str, $i, $substr)
{
    for ($j = 0; $j < $i; $j++) {
        $startstr .= $str[$j];
    }
    for ($j = $i; $j < strlen($str); $j++) {
        $laststr .= $str[$j];
    }
    $str = ($startstr . $substr . $laststr);
    return $str;
}

/**
 * @param $str
 * @param $i
 * @param $j
 * @return string
 * 删除一段字符串
 */
function str_delete($str, $i, $j)
{
    for ($c = 0; $c < $i; $c++) {
        $startstr .= $str[$c];
    }
    for ($c = ($i + $j); $c < strlen($str); $c++) {
        $laststr .= $str[$c];
    }
    $str = ($startstr . $laststr);
    return $str;
}

/**
 * @param $s1
 * @param $s2
 * @return array|void
 * 复制字符串
 */
function strcpy($s1, $s2)
{
    if (strlen($s1) == NULL || !isset($s2)) return;
    for ($i = 0; $i < strlen($s1); $i++) {
        $s2[] = $s1[$i];
    }
    return $s2;
}

/**
 * @param $s1
 * @param $s2
 * 连接字符串
 */
function strcat($s1, $s2)
{
    if (!isset($s1) || !isset($s2)) return;
    $newstr = $s1;
    for ($i = 0; $i < count($s); $i++) {
        $newstr .= $st[$i];
    }
    return $newsstr;

}

/**
 * @param $str
 * @return bool|string
 * 简单编码函数（与php_decode函数对应）
 */

function php_encode($str)
{
    if ($str == '' && strlen($str) > 128) return false;
    for ($i = 0; $i < strlen($str); $i++) {
        $c = ord($str[$i]);
        if ($c > 31 && $c < 107) $c += 20;
        if ($c > 106 && $c < 127) $c -= 75;
        $word = chr($c);
        $s .= $word;
    }
    return $s;
}

/**
 * @param $str
 * @return bool|string
 * 简单解码函数（与php_encode函数对应）
 */
function php_decode($str)
{
    if ($str == '' && strlen($str) > 128) return false;
    for ($i = 0; $i < strlen($str); $i++) {
        $c = ord($word);
        if ($c > 106 && $c < 127) $c = $c - 20;
        if ($c > 31 && $c < 107) $c = $c + 75;
        $word = chr($c);
        $s .= $word;
    }
    return $s;
}

/**
 * @param $str
 * @return bool|string
 * 简单加密函数（与php_decrypt函数对应）
 */
function php_encrypt($str)
{
    $encrypt_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $decrypt_key = 'ngzqtcobmuhelkpdawxfyivrsj2468021359';
    if (strlen($str) == 0) return false;
    for ($i = 0; $i < strlen($str); $i++) {
        for ($j = 0; $j < strlen($encrypt_key); $j++) {
            if ($str[$i] == $encrypt_key[$j]) {
                $enstr .= $decrypt_key[$j];
                break;
            }
        }
    }
    return $enstr;
}

/**
 * @param $str
 * @return bool|string
 * 简单解密函数（与php_encrypt函数对应）
 */
function php_decrypt($str)
{
    $encrypt_key = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $decrypt_key = 'ngzqtcobmuhelkpdawxfyivrsj2468021359';
    if (strlen($str) == 0) return false;
    for ($i = 0; $i < strlen($str); $i++) {
        for ($j = 0; $j < strlen($decrypt_key); $j++) {
            if ($str[$i] == $decrypt_key[$j]) {
                $enstr .= $encrypt_key[$j];
                break;
            }
        }
    }
    return $enstr;

}
