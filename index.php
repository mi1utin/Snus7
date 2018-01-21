<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Mr.Twister">
	<meta name="description" content="Снюс в Рязане,Коломне,Воскресенске,Егорьевске">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Snus7.ru - Лучший дешевый снюс прямиком из Щвеции!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="wrapper">
		<div id="up">
			<a href="#">Mail</a>
			<a href="#">Vk</a>
			<a href="#">Facebook</a>
		</div>
	<header>
	<a href="index.php">
		<div id="logo">
			<h1>Snus7.ru</h1>
		</div>
	</a>
		<div class="menu">
			<a href=""><b>Главная</b></a>
		</div>
		<div class="menu">
			<a href=""><b>Контакты</b></a>
		</div>
		<div class="menu">
			<a href=""><b>О нас</b></a>
		</div>
	</header>
	<section>
		<div id="changed">
		</div>
		<div id="note">
			<p>При заказе от 1000 рублей 
			Бесплатная доставка!</p>
		</div>
	</section>
	<article>
		<p><b>Почему мы?</b> Все потому ,что мы лучшие в продаже снюса!</p>
		<p>Вам не найти цен,качества и быстроты доставки в других местах
		Тем более вам будет тяжело приобрести доверие в другом магазине</p>
		<p>Наш магазин максимально заботится о клиенте и готов выполнить любые просьбы!</p>
		<p>Именно благодаря всем этим качествам,мы надеемся на ваше доверие и понимание</p>
		<p><b>Что такое снюс?</b></p>
		<p>Снюс — вид табачного изделия. Представляет собой измельчённый увлажнённый табак, который помещают между губой и десной на некоторое время — от 15 до 40 минут. Является отличной заменой сигарет.</p>
	</article>
	<section>
		<div id="market">
		<img src="images/1.png">
		<b>Снюс EPOK Lime Strong</b>
		<p>Неожиданно фруктовый, насыщенный, сложнейшая комбинация между современным снюсом и цитрусом.Очень хорошо прибивает и оставляет замечательное послевкусие.<hr></p>
		<img src="images/2.png">
		<b>Снюс Odens Cold Dry</b>
		<p>Odens самый популярный табак в Щвеции.Яркий вкус перечной мяты,отлично подойдет для любителей сигарет с ментолом.Хорошо прибивает и не оставит вас не довольным.<hr></p>
		<img src="images/3.png">
		<b>Снюс Siberia Brown</b>
		<p>Экстра крепкий порционный жевательный табак со вкусом перечной мяты.Очень крепок и сильно прибивает,оставляя после себя замечательное ощущение.</p>
		</div>
	</section>
	<footer>
		
	</footer>
</div>
<script type="text/javascript">
	var ch = document.getElementById('changed');
	var lg = document.getElementById('logo');
	var a = 1;
	var changed = function change(){
		ch.style.backgroundImage = "url(backgrounds/"+a+".jpg)";
		a++;
		if (a >= 5) { 
			a = 1;
		}
	};
	setInterval(changed,10000);
</script>
</body>
</html>