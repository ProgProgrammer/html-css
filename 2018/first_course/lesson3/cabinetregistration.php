<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>THE BLACK CASE</title>
		<link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="img/logotwo.jpg" type="image/jpg">
	</head>
	<body>
		<h1><a href="index.php">THE BLACK CASE</a></h1>
		<h2><strong>+7(961)-6-949-949</strong></h2>
		<h2><strong><a href="map.html">Контакты</a></strong></h2>
		<nav class="top-menu">
			<ul class="menu-main">
				<li class="left-item"><a href="index.php" class="down">Телефоны</a></li>
					<ul class="submenu">
						<li class="left-item"><a href="apple.html">Apple</a></li>
						<li class="left-item"><a href="samsungphone.html">Samsung</a></li>
						<li class="left-item"><a href="meizuphone.html">Meizu</a></li>
					</ul>
				<li class="right-item"><a href="index.php" class="down">Чехлы</a></li>
					<ul class="submenu">
						<li class="right-item"><a href="applecase.html">Apple</a></li>
						<li class="right-item"><a href="samsungcase.html">Samsung</a></li>
						<li class="right-item"><a href="meizucase.html">Meizu</a></li>
						<li class="right-item"><a href="cabinet.html">Кабинет</a></li>
					</ul>
			</ul>
				<a class="navbar-logo" href="index.php"><img src="img/logo.jpg" alt="интернет-магазин"></a>
		</nav>
		<div class="contentthirteen">
			<form action="cabinetregisterted.html">
				<div class="contenteleven">
					<p>
						<span class="red">*</span> - Обязательные для заполнения поля
					</p>
				</div>
				<div class="contenteleven">
					<input type="text" placeholder="Ваше ФИО*" id="sizeplus" name="fullname" required>
				</div>
				<div class="contenteleven">
					<input type="email" placeholder="E-mail*" id="sizeplus" name="email" required>
				</div>
				<div class="contenteleven">
					<input type="tel" placeholder="Номер телефона" id="size" name="phone">
				</div>
				<div class="contenteleven">
					<input type="url" placeholder="Адрес вашего сайта" id="size"  pattern="(http|https://.+)" name="url">
				</div>
				<div class="contenteleven">
					М<input type="radio" name="pol"> Ж<input type="radio" name="pol">
				</div>
				<div class="contenteleven">
					Какой из брендов вам больше нравится:</br>
					<select id="sizetwo">
						<option>Apple</option>
						<option>Samsung</option>
						<option>Meizu</option>
					</select>
				</div>
				<div class="contenteleven">
					<input type="password" placeholder="Пароль*" id="sizeplus" name="password" required>
				</div>
				<div class="contenteleven">
					<input type="password" placeholder="Подтвердите пароль*" id="sizeplus" name="password" required>
				</div>
				<div class="contentfourteen">
					<label>
					<input type="checkbox" checked required>Я согласен с <a href="subscription.html" target="_blank">условиями подписки</a></br>
					</label>
					<label>
					<input type="checkbox" checked required>Я согласен на обработку <a href="data.html" target="_blank">персональных данных</a></br>
					</label>
				</div>
				<div class="contentseventeenplus">
					<input type="text" name="bezspama" placeholder="2*2=:">
				</div>						
				<input type="submit" value="OK"> <input type="reset" value="Очистить все">
			</form>
			</php
				$bezspama = htmlspecialchars($_POST["bezspama"]);
				if (empty($bezspama))
					 {
					 }
				exit;
			?>	
		</div>
		<div class="footer">
			<a href="https://vk.com/the.black.case" target="_blank">THE BLACK CASE 2018 &copy SITE</a>
		</div>
	</body>
</html>