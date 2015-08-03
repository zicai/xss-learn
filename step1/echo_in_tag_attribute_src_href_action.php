<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>输出在HTML属性中: src/href/action</h3>
<form action="" method="get">
    输入payload:
    <input type="text" name="payload" style="width: 500px;">
</form>
<?php
$input = $_GET['payload'];
echo '<img src="' . $input . '">echo here'
?>

<h4>可选payload:</h4>
<ul>
    <li>javascript:alert(1)//</li>
    <li>data:text/html;base64,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg==</li>
</ul>
</body>
</html>