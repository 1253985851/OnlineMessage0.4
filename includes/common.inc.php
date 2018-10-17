<?php
//设置页面内容是html, 编码格式是utf-8
header('Content-Type:text/html;charset=utf-8');
// 防止恶意调用
if (!defined("IN_TG")) {
    exit("禁止访问！");
}
// echo __FILE__.'<br/>';
// echo dirname(__FILE__).'<br/>';
// echo substr(dirname(__FILE__), 0, - 8).'<br/>';
// 转换成硬路径常量
define('ROOT_PATH', substr(dirname(__FILE__), 0, -8));
// 拒绝PHP低版本
if (PHP_VERSION < '4.1.0') {
    exit('PHP version too lower!');
}
//调用公共函数库
require(ROOT_PATH . 'includes/global_fun.php');
require(ROOT_PATH . 'includes/mysql.fun.php');

//玉米网某页面开始执行的时间(一个浮点数)
define('START_TIME', _runtime());
// 数据库连接
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');//有时密码是空的，即''
define('DB_NAME', 'myMessages');

// 初化数据库
_connect();
_select_db();
_set_charset_name(); // 设置字符集

// 测试新增用户功能，看看能否成功
 global $link;
 //mysqli_query($link, "INSERT INTO tg_user(tg_username) values('张三')") or die(mysqli_error($link));
// $a=_fetch_array("select * from tg_user");
 //var_dump($a);

?>