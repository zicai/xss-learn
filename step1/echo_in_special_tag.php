<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>输出在特殊标签中</h3>

<ul>
    <li>&lt;title&gt;&lt;/title&gt;</li>
    <li>&lt;textarea &gt;&lt;/textarea&gt;</li>
    <li>&lt;xmp&gt;&lt;/xmp&gt;</li>
    <li>&lt;iframe &gt;&lt;/iframe&gt;</li>
    <li>&lt;noscript&gt;&lt;/noscript&gt;</li>
    <li>&lt;noframe&gt;&lt;/noframe&gt;</li>
    <li>&lt;plaintext&gt;&lt;/plaintext&gt;</li>
</ul>

<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>

<?php
$input = $_GET['payload'];

echo '<textarea >'.$input.'</textarea>';
?>

<h4>可选payload:</h4>
<ul>
    <li>&lt;/textarea&gt;&lt;script&gt;alert(1)&lt;/script&gt;</li>
</ul>

</body>
</html>