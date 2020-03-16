<?php

$queue = [];//通过数组,数组函数array_push(入队列),array_shift(出队列)  实现伪队列
$ergodic = [];//通过php的hash数组特性,直接$ergodic[hash(文件夹名)]=1; 进行表示该文件夹名已遍历
$rootPath = 'E:\wamp\www\test';
//顶级目录入列
array_push($queue, $rootPath);

while ($path = array_shift($queue)) {
    //判断目录是否已经遍历过
    if (checkTask($ergodic, $path)) {
        continue;
    }
    //标记该目录已经遍历过
    $ergodic[md5($path)] = 1;

    //获取目录的数据
    $fileData = getDirData($path);
    //判断是文件,还是文件夹
    foreach ($fileData as $file) {
        //过滤本级目录以及上级
        if ($file == '.' || $file == '..') {
            continue;
        }

        $filePath = "{$path}/$file";
        echo "当前遍历文件:{$filePath}\n";
        if (is_file($filePath)) {//如果是文件,则处理文件
            //判断文件终止情况
            if (checkFile($filePath)) {
                echo "文件搜索成功,路径为:{$filePath}\n";
                break 2;
            }
        } elseif (is_dir($filePath)) {//如果是目录,则入队列,继续处理
            //入列
            pushQueue($queue, $filePath);
        } else {
            continue;
        }
    }
}

/**
 * 扫描文件夹(获取子级数据)
 * getDirData
 * @param $path
 * @return array
 * @author Tioncico
 * Time: 11:55
 */
function getDirData($path)
{
//扫描文件夹
    $file = scandir($path);
    return $file;
}

//判断遍历条件是否完成
function checkFile($data)
{
    if (basename($data) == '仙士可.txt') {
        return true;
    }
    return false;
}

//判断该任务是否已经遍历过
function checkTask($ergodic, $path)
{
    return isset($ergodic[md5($path)]);
}

//子级数据入队列
function pushQueue(&$queue, $data)
{
    array_push($queue, $data);
}
