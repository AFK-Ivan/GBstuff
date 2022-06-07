<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 

</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

<div class="contentWrap">
    <div class="content">
        <div class="center"> 

			<h1>Игра в загадки</h1>

			<div class="box">

			<?php

				if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
					$userAnswer = $_GET["userAnswer1"];
					$score = 0;
					if($userAnswer == "олень" || $userAnswer == "лось"){
						$score++;
					}

					$userAnswer = $_GET["userAnswer2"];
					if($userAnswer == "коза"){
						$score++;
					}		
					$userAnswer = $_GET["userAnswer3"];
					if($userAnswer == "сапоги" || $userAnswer == "ботинки" || $userAnswer == "туфли"){
						$score++;
					}

					echo "Вы угадали " . $score . " загадок";
				}		
			?>

				<form method="GET">
					<p>Кто на своей голове лес носит?</p>
					<input type="text" name="userAnswer1">

					<p>Почти как барашек, но без кудряшек?</p>
					<input type="text" name="userAnswer2">

					<p>Пустые отдыхаем, а полные шагаем."</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

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