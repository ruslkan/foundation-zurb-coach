<?php
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
$email = '<katerinaemelyanchik.by>'; // from whom
$send = mail($address, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>С вами свяжутся</title>
<link rel="stylesheet" href="{{root}}assets/css/app.css" />

<body>

	<div class="callout-wrap">
		<div class="callout">
			<h5>Ваше сообщение отправлено!</h5>
			<p>Я свяжусь с Вами в ближайшее время</p>
		</div>
	</div>
	<style type="text/css">
		body {
			background: #252b42;
		}

		.callout-wrap {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #ffffff;
		}

		.callout {
			text-align: center;
			padding: 20px;
			color: #2dc071;
			font-size: 22px;
		}
	</style>
	<script type="text/javascript">
		setTimeout('location.replace("/index.html")', 5000);
		/* change current page address after 5 seconds (5000 milliseconds) */
	</script>
</body>

</html>
