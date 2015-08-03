<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>出现在HTML标签中的javascript代码，可以进行HTML形式的编码</h3>

<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>
<?php
$input = $_GET['payload'];
?>
<div type="text" onclick="document.write('<?php echo $input ?>')">echo here</div>

<h4>可选payload:</h4>
<ul>
    <li>&lt;img src=@ onerror=alert(1)&gt;</li>
    <li>对上面的payload 进行部分或者全部的HTML encode。可以是 十六进制格式 &#xH; 也可以是 十进制格式 &#D ,也可以是实体名，最后的分号可以省略
        <br><a href="http://www.w3school.com.cn/html/html_entities.asp">http://www.w3school.com.cn/html/html_entities.asp</a>
    </li>
</ul>
</body>
</html>