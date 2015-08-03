<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>输出在HTML属性中: style中执行脚本，注入expression关键词</h3>
<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>
<?php
$input = $_GET['payload'];
?>

<h4>可选payload:</h4>
<ul>

</ul>
</body>
</html>