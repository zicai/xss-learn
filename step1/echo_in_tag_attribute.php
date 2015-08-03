<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>输出在HTML属性中</h3>
<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>
<?php
$input = $_GET['payload'];
echo '<div name="' . $input . '">echo here</div>'
?>

<h4>可选payload:</h4>
<ul>
    <li>闭合属性，然后使用on事件来触发脚本。
        " onclick="alert(1)
        <br><a href="/wiki/index.html#on-event">都有哪些on事件</a></li>
    <li>闭合属性后又闭合标签。"&gt;&lt;script&gt;alert(1)&lt;/script&gt;</li>
</ul>
</body>
</html>