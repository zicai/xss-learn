<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>输出在javascript中</h3>

<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>
<?php
$input = $_GET['payload'];
?>
<script>
    var a =<?php echo $input?>;
    console.log(a);
</script>

<h4>可选payload:</h4>
<ul>
    <li>1; alert(1)</li>
    <li>&lt;/script&gt;&lt;script&gt;alert(1)//</li>
</ul>
</body>
</html>