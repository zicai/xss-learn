<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>具备HTMLEncode功能的标签</h3>
<ul>
    <li>textarea</li>
    <li>title</li>
    <li>iframe</li>
    <li>noscript</li>
    <li>noframes</li>
    <li>xmp</li>
    <li>plaintext</li>
</ul>
<script>
    function $(id) {
        return document.getElementById(id);
    }
</script>
<input type="button" id="exec_btn" onclick="$('i1').innerHTML='<img src=@ onerror=alert(1)>';alert($('i1').innerHTML)">
<input type="button" id="exec_btn" onclick="$('i2').innerHTML='<img src=@ onerror=alert(1)>';alert($('i2').innerHTML)">
<textarea name="" id="i1" cols="30" rows="10"></textarea>

<div id="i2"></div>
</body>
</html>