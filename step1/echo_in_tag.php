<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>直接输出在body中</h3>

<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>

<?php
$input = $_GET['payload'];

echo $input;
?>

<h4>可选payload:</h4>
<ul>
    <li>&lt;script&gt;alert(1)&lt;/script&gt;</li>
</ul>
<br>
<h4>注意：</h4>
<a href="echo_in_special_tag.php">有一些标签之间是无法执行脚本的。</a>
</body>
</html>