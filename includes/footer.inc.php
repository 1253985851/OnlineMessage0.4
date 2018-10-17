<?php
// 防止恶意调用
if (! defined("IN_TG")) {
    exit("Access denied");
}
?>
<div id="footer">
    <p>本程序运行时间为：<?php echo round(_runtime()-START_TIME,4)?>秒</p>
    <p>版权所有 翻版必究</p>
    <p>
        本程序由<span>玉米网</span>提供
    </p>
    <p>
        联系电话：86680048   地址：茶山高科路
    </p>
</div>
