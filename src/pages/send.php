<?php
$zaschita = md5(md5(time()) . "rus");
$vremya = md5(time());


$pol_time = $_GET['p'];
$vernii_shifr = md5($pol_time . "rus");
$pol_shifr = $_POST['zf'];

/* checking the existence of variables */
if (isset($_POST['phone'])) {
	$phone = $_POST['phone'];
}
if (isset($_POST['name'])) {
	$name = $_POST['name'];
}
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}

/* recipient's email */
$address = "admin@katerinaemelyanchik.by";

/* message text, \n - line break */
$mes = "Тема: Сообщение с сайта\nТелефон: $phone\nИмя: $name\nE-mail: $email\n";

/* sending a letter to the specified e-mail */
$sub = 'Сообщение с сайта';
$email = '<yourdomen.ru>'; // from whom
$send = mail($address, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta http-equiv="refresh" content="3; url=index.html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>С вами свяжутся</title>
	<meta name="keywords" content="">
	<meta name="description" content="{{ description }}" />
	<link rel="stylesheet" href="{{root}}assets/css/app.css" />
</head>

<body>

	<style type="text/css">
		body {
			background: #252b42;
		}
	</style>
	<script type="text/javascript">
		setTimeout('location.replace("/index.html")', 3000);
		/* change current page address after 3 seconds (3000 milliseconds) */
	</script>
</body>

</html>
