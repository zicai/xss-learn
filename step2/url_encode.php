<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>href里的数据默认会被浏览器进行一次URL解码处理</h3>

<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>
<?php
$input = $_GET['payload'];
?>
<a href="<?php echo $input ?>">echo here</a>

<h4>可选payload:</h4>
<ul>
    <li>javascript:alert(1)</li>
    <li>javascript:alert%281%29</li>
</ul>
为什么将payload2 的 :编码后就不行了？？
javascript%3Aalert%281%29
百分号被编码两次
http://xss.hack.com/step2/url_encode.php?payload=javascript%253Aalert%25281%2529
http://xss.hack.com/step2/url_encode.php?payload=javascript%3Aalert%25281%2529
</body>
</html>