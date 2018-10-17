<?php
header(“Content-type:text/html;charset=UTF-8”);
//
//...
define("IN_TG",true)；
//防止恶意调用
if(!define("IN-TG")){
    exit("禁止访问！");
}
define('SCRIPT'.'Register');
require (dirname(_FILE_).'/includes/common.inc.php');//前面一定义过IN_TG

?>
<?php
header("Content-type:text/html;charset=UFT-8");
define("IN_TG",true);
define('SCRIPT','Register');
require(dirname(_FILE_).'/includes/common.inc.php');
?>
<html>
<head>
    <?php require_once(ROOT_PATH.'includes/title.inc.php');?>
</head>
<body>
<?php require ROOT_PATH.'includes/header.inc.php';?>
<div id="Register">
    <h2>会员注册</h2>
    <form method="post"  action="Register.php?action=Register" name=""register">
    //...
    </form>
</div>

<?php require ROOT_PATH.'includes/footer.inc.php';?>
</body>
</html>
