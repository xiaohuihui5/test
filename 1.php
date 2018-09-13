<html>
<head>
    <meta charset="utf-8">
    <title>test1.html页面</title>
</head>
<body>
请输入：
<input type="text" id="txta" >
<br />
第一种方式，传输入的值
<input type=button value="去往test2.html页面" onclick="tiaozhuan()" />

<br />

</body>
</html>
<script type="text/javascript">
    var tiaozhuan = function(){
        document.location.href ='2.php';
    }
</script>
