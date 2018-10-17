<?php
header('Content-Type:text/html;charset=utf-8');
// 防止恶意调用
if (! defined("IN_TG")) {
    exit("禁止访问！");
}

/**
 * 连接mysql数据库
 */
function _connect()
{
    // global表示全局变量
    global $link;
    // 创建数据库连接
    if (! $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) {
        exit("数据库连接失败！");
    }
}

/**
 * 选择一款数据库
 */
function _select_db()
{
    global $link; // 声明变量是全局变量
    if (! mysqli_select_db($link, DB_NAME)) {
        exit("找不到指定的数据库");
    }
}

/**
 * 设置字符集
 */
function _set_charset_name()
{
    global $link;
    // 设置字符集名称
    if (! $link->set_charset("utf8")) // 注意这里是utf8 并不是utf-8
    {
        exit("字符集名称错误！");
    }
}

?>