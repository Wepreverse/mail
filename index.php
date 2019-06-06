
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div style="text-align:center">
		<form action="mail.php" method="POST" style="width:300px;margin-left:auto;margin-right:auto">
			<h3 style="font-family:Arial">Отправить письмо</h3>
			<input type="text" name="mail" placeholder="Кому:" style="width:100%;border:none">
			<br>
			<input type="text" name="header" placeholder="Заголовок" style="width:100%;border:none">
			<br>
			<textarea type="text" name="text" placeholder="Текст письма" style="width:100%;border:none;height:100px"></textarea>
			<br>
			<button style="width:30%;margin-left:-40%;margin-top: 5px;border:none;padding:5px 10px;font-s">Отправить</button>
		</form>
	</div>
</body>
</html>