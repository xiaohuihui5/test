<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>test2.html页面</title>
	</head>
	<body>
		test1.html页面传来的值为：<input type=text id="txt1" />
		<script type="text/javascript">
			var txt1 = document.getElementById("txt1");
			txt1.value = location.search.match(new RegExp("[\?\&]mydata1=([^\&]+)", "i"))[1];
		</script>
	</body>
</html>
