<?php
// 定义常量，用来授权调用includes里面的文件
define("IN_TG", true);
// 引入公共文件
// 转换成硬路径，速度快一些
require(dirname(__FILE__) . '/includes/common.inc.php');
define("SCRIPT", "index");
?>
<html>
<head>
    <?php require(ROOT_PATH . 'includes/title.inc.php'); ?>
</head>
<body>
<!--<h2>玉米网在服务器上的根文件夹为：--><?php //echo ROOT_PATH; ?><!--</h2>-->
<?php require(ROOT_PATH . 'includes/header.inc.php'); ?>
<div id="list">
    <h2>帖子列表</h2>
    <?php echo _sha1_uniqid();?>
</div>
<div id="user">
    <h2>新建会员</h2>
</div>
<div id="pics">
    <h2>最新图片</h2>
</div>
<?php require(ROOT_PATH . 'includes/footer.inc.php'); ?>
</body>
</html>