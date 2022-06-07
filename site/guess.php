<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var playerNumber = 1;

		function readInt(){
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
			// return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){
	
			var userAnswer = readInt();
			
			if(userAnswer == answer){
				write("<b>Поздравляю, вы угадали! Победил игрок " + playerNumber + "</b>" );
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				write("Игрок " + playerNumber + ". Вы ввели слишком большое число<br>Очередь другого игрока. Введите число от 1 до 100");
			} else if(userAnswer < answer){
				write("Игрок " + playerNumber + ". Вы ввели слишком маленькое число<br>Очередь другого игрока. Введите число от 1 до 100");
			}

			if(playerNumber == 1){
				playerNumber = 2;
			} else {
				playerNumber = 1;			
			}

		}

	</script>
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка</h1>

			<div class="box">

				<p id="info">Угадайте число от 0 до 100</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Начать</a>				
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Ivan Brykin
<div>


</body>
</html>