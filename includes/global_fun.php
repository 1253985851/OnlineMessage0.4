<?php
//公共函数库
/**
 * 给出提示，返回
 * @param string $info 提示信息
 */
function _alert_back($info)
{
    echo "<script type='text/javascript'>alert('" . $info . "');history.back();</script>";
    exit();
}

function _alert_close($info)
{
    echo "<script type='text/javascript'>alert('" . $info . "');history.close();</script>";
    exit();
}

function _sha1_uniqid()
{
    return sha1(uniqid(rand(), true));
}

function _runtime()
{
    $mtime = explode(' ', microtime());
    return $mtime[1] + $mtime[0];
}