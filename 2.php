<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>test2.htmlҳ��</title>
	</head>
	<body>
		test1.htmlҳ�洫����ֵΪ��<input type=text id="txt1" />
		<script type="text/javascript">
			var txt1 = document.getElementById("txt1");
			txt1.value = location.search.match(new RegExp("[\?\&]mydata1=([^\&]+)", "i"))[1];
		</script>
	</body>
</html>
