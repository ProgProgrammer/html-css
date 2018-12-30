<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>THE BLACK CASE</title>
		<link rel="stylesheet" href="style.css?v=1">
		<link rel="shortcut icon" href="img/logotwo.jpg" type="image/jpg">
	</head>
    <body>
	    <div class="container">
		    <div class="head">
				<h1><a href="index.php">THE BLACK CASE</a></h1>
                <h2><strong><a href="tel:+79616949949">+7(961)-6-949-949</a></strong></h2>
		       	<h2><strong><a href="map.html">Контакты</a></strong></h2>
		       	<div class="nav">
				    <ul class="menu-main">
				    	<li><a href="index.php">Телефоны</a></li>
			        	<li><a href="apple.html">Apple</a></li>
			   	    	<li><a href="samsungphone.html">Samsung</a></li>
			   	    	<li><a href="meizuphone.html">Meizu</a></li>
			   	    	<li><a href="index.php">Чехлы</a></li>
			   	    	<li><a href="applecase.html">Apple</a></li>
			   	    	<li><a href="samsungcase.html">Samsung</a></li>
			   	    	<li><a href="meizucase.html">Meizu</a></li>
			   	    	<li><a href="cabinet.html">Кабинет</a></li>
                        <li><a href="basket.html">Корзина</a></li>
                    </ul>
                    <div class="logo"><a href="index.php"><img src="img/logo.jpg" alt="логотип"></a></div>
                </div>
            </div>
            <div class="header">
                <div class="navadaptive">
                    <ul class="menu-adaptive">
                        <li class="menu"><a href="menu.html"><img src="img/menu.png" alt="menu"></a></li>
                        <li class="logotype"><a href="index.php"><img src="img/logo.jpg" alt="logotype"></a></li>
                        <li class="basket"><a href="basket.html"><img src="img/basket.png" alt="basket"></a></li>
                    </ul>
                </div>
            </div>
            <div class="body">
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
					        <input type="number" placeholder="Номер телефона" id="size" name="phone">
				        </div>
				        <div class="contenteleven">
					        <input type="url" placeholder="Адрес вашего сайта" id="size"  pattern="(http|https://.+)" name="url">
				        </div>
				        <div class="contenteleven">
					        М<input type="radio" name="pol"> Ж<input type="radio" name="pol">
				        </div>
				        <div class="contenteleven">
					        Какой из&nbsp;брендов вам больше нравится:</br>
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
					        <input type="checkbox" checked required>Я&nbsp;согласен с&nbsp;<a href="subscription.html" target="_blank">условиями подписки</a></br>
					        </label>
					        <label>
					        <input type="checkbox" checked required>Я&nbsp;согласен на&nbsp;обработку <a href="data.html" target="_blank">персональных данных</a></br>
					        </label>
				        </div>
				        <div class="contentseventeenplus">
					        <input type="text" name="bezspama" placeholder="2*2=:">
				        </div>						
				        <input type="submit" value="OK"> <input type="reset" value="Очистить все"> <input type="submit" value="Назад" onclick="history.back();">
			        </form>
			        </php
				        $bezspama = htmlspecialchars($_POST["bezspama"]);
				        if (empty($bezspama))
					         {
					         }
				        exit;
			        ?>
                </div>
            </div>
		    <div class="footer">
			    <a href="https://vk.com/the.black.case" target="_blank">THE BLACK CASE 2018 &copy SITE</a>
		    </div>
        </div>
	</body>
</html>