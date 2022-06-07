<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Личный сайт студента Geekbrains   
	</title>
	<link rel="stylesheet" href="style.css">	
</head>
<body>  
 
 <div class="content">
 <?php
 	include "menu.php";
 ?>  

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/smile.jpg">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Иван Брыкин</i>. Я учусь в университете ННГУ им. Лобачевского.</p>

			<p>IT-портал <a href="http://www.geekbrains.ru/"><b>GeekBrains</b></a>помогает мне получить дополнительные знания в сфере программирования и информационной безопасности.</p>

			<p>На этом сайте вы сможете сыграть несколько игр, которые я написал.</p>
			<p><a href="index.php">Главная</a>
			<a href="puzzle.php">Загадки</a>
			<a href="guess.php">Угадайка</a>
			<a href="generator.php">Генератор паролей</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Ivan Brykin
<div>

</body>
</html>