<!DOCTYPE html>
<html>
	<head>
	<meta charset= "utf-8">
	<title> Задачник </title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="header">
			<a href="index.php">Главная</a>
			<span>/</span>
			<a href="puzzles3.php">Задачки</a>
			<span>/</span>
			<a href="guess (2).html">Угадайка</a>
			<span>/</span>
			<a href="guess.html">Угадайка мультиплеер</a>
			<span>/</span>
			<a href="converter.html">Конвертер валют</a>
			<span>/</span>
			<a href="bank.html">Банковская программа</a>
			<span>/</span>
	</div>
	<h1>Личный сайт студента GeekBrains Андреева В.А.</h1>
	<h1>
		<?php>
			$newYear = 365 - date('z');
				if ($newYear == 0) {
					echo "С Новым Годом!";
				} else {
					echo "До Нового года осталось " . "$newYear" . " дня.";
				}
		?>
	</h1>
	<div id="center">
	<div id="box">
		<form action ='' method ="get">
			<h5>Загадки</h5>
			<p> Зимой и летом одним цветом (ответ написать с маленькой буквы). <p/>
			<input type = "text" name = "userAnswer1">
			<br><br>
			<input type="submit">
			<p> Дед, коза и волк и капуста, находятся на левом берегу. Есть лодка, которая способна вместить деда, <br>
			и еще кого-то ОДНОГО (волка, козу или капусту). Если оставить волка наедине с козой, он её съест.<br>
			Коза – съест капусту. При деде – все паиньки, и никто никого не есть. Деду нужно перевести всех с левого берега на правый.<br>
			Кого или что первым должен взять с собой в лодку дед, чтобы удалось перевезти всех на другой берег? (волк/капуста/коза)" <p/>
			<input type = "text" name = "userAnswer2">
			<br><br>
			<input type="submit">
		</form>
		<?php
			$userAnswer1 = $_GET["userAnswer1"];
			if ($userAnswer1 == "елка" || $userAnswer1 == "ёлка") {
				echo ("Молодец, решил загадку первую загадку! ");
			} else {
				echo ("Не решил первую загадку. ");
			}
			$userAnswer2 = $_GET["userAnswer2"];
			if ($userAnswer2 == "коза") {
				echo ("Молодец, решил вторую загадку! ");
			} else {
				echo ("Плохо, не решил вторую загадку. ");
			}
		?>
	</div>
</div>
<div class="footer">
	Andreev V.A. 2017 &copy <a href="https://vk.com/volodyaandr" target="_blank"> VK </a>
</div>
</body>
</html>