<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>出现在script标签里的HTML代码，可以进行javascript编码</h3>
<h4>javascript 执行前会自动解码，和去转义</h4>
<form action="" method="get">
    输入payload:<input type="text" name="payload"/>
</form>
<?php
$input = $_GET['payload'];
?>
<div id="clickme">click me</div>

<script>
    document.getElementById('clickme').onclick = function () {
        document.write('<?php echo $input?>')
    }
</script>

<h4>可选payload:</h4>
<ul>
    <li>&lt;img src=@ onerror=alert(1)&gt;</li>
    <li>上面payload 的Unicode形式： \uH (十六进制 )
        <br>
        \u003c\u0069\u006d\u0067\u0020\u0073\u0072\u0063\u003d\u0040\u0020\u006f\u006e\u0065\u0072\u0072\u006f\u0072\u003d\u0061\u006c\u0065\u0072\u0074\u0028\u0031\u0029\u003e</li>
    <li>普通十六进制： \xH
        <br>
        \x3C\x69\x6D\x67\x20\x73\x72\x63\x3D\x40\x20\x6F\x6E\x65\x72\x72\x6F\x72\x3D\x61\x6C\x65\x72\x74\x28\x31\x29\x3E</li>
    <li>纯转义： <br>
        \&lt;img src=@ onerror=alert(1)\&gt;
    </li>
</ul>
<h4>资料</h4>
<ul>
    <li>
        <a href="https://developer.mozilla.org/zh-CN/docs/Web/JavaScript/Guide/Grammar_and_types#%E5%9C%A8%E5%AD%97%E7%AC%A6%E4%B8%B2%E4%B8%AD%E4%BD%BF%E7%94%A8%E7%9A%84%E7%89%B9%E6%AE%8A%E5%AD%97%E7%AC%A6">javascript中特殊字符</a>
    </li>
    <li><a href="http://stackoverflow.com/questions/21647928/javascript-unicode-string-to-hex">javascript-unicode-string-to-hex</a>
    </li>
    <li><a href="http://0xcc.net/jsescape/">强大的编码工具</a></li>
</ul>
<script>
    String.prototype.hexEncode = function () {
        var hex, i;

        var result = "";
        for (i = 0; i < this.length; i++) {
            hex = this.charCodeAt(i).toString(16);
            result += '\\u' + ("000" + hex).slice(-4);
        }

        return result
    };
    String.prototype.hexDecode = function () {
        var j;
        var hexes = this.match(/.{1,4}/g) || [];
        var back = "";
        for (j = 0; j < hexes.length; j++) {
            back += String.fromCharCode(parseInt(hexes[j], 16));
        }

        return back;
    }
</script>
</body>
</html>