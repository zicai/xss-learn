<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>JSON.stringfy()</h3>

<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>
<?php
$input = $_GET['payload'];
?>
<div id="clickme">click me</div>
<div id="output"></div>
<script>
    document.getElementById('clickme').onclick = function () {
        s = JSON.stringify(<?php echo $input?>);
        document.getElementById('output').innerHTML='<script>console.log(' + s + ');<\/script>'
    }
</script>

<h4>可选payload:</h4>
<ul>
    <li>&lt;img src=@ onerror=alert(1)&gt;</li>

</ul>
<h4>资料</h4>
<ul>
    <li>
        <a href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Guide/Grammar_and_types#%E5%9C%A8%E5%AD%97%E7%AC%A6%E4%B8%B2%E4%B8%AD%E4%BD%BF%E7%94%A8%E7%9A%84%E7%89%B9%E6%AE%8A%E5%AD%97%E7%AC%A6">javascript中特殊字符</a>
    </li>

</ul>

</body>
</html>