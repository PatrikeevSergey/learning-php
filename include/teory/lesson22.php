<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Окружение</title>
</head>
<body>
<div class="container">
<div class="row">
	<div>
		<h1>
			Окружение 
		</h1>

		<p>
			Какое значение окажется внутри переменной <span class="spanWarning">$result</span> после выполнения кода?
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>$age = 5;</span><br>
			<span>function generate() {</span><br>
			<span>&nbsp;&nbsp;return $age + 3;</span><br>
			<span>}</span><br>
			<span>$result = generate();</span><br>
		</div>
		<p>
			Правильный ответ: код выдаст ошибку. Потому что внетри функции нет переменной <span class="spanWarning">$age</span>, но функция попытается ее использовать. Функция изолирована от внешних переменных. Все переменные, которые определены снаружи функции, не связаны с переменными, которые определены внутри нее. В теле функции написана программа, которая изолирована от внешней среды или как еще говорят - от внешнего окружения. Наглядный пример: 
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>$age = 5;</span><br>
			<span>function changeAge() {</span><br>
			<span>&nbsp;&nbsp;$age = 8;</span><br>
			<span>}</span><br>
			<span>changeAge();</span><br>
			<span>$result = $age; // => 5</span><br>
		</div>
		<p>
			Отсюда следует вывод: переменная, которая создана внутри функции <span class="spanWarning">changeAge()</span>, никак не влияет на внешнюю переменную <span class="spanWarning">$age,</span> поэтому после вызова функции значение внешней переменной останется неизменным.
		</p>
	</div>
	<div>
		<h1>
			Константы
		</h1>
		<p>
			В PHP данные можно хранить в константах. Область их видимости и область видимости переменных отличаются. Объявленные в файле константы доступны в теле функции. Пример:			
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>const AGE = 5;</span><br>
			<span>function generate() {</span><br>
			<span>&nbsp;&nbsp;return AGE + 8;</span><br>
			<span>}</span><br>
			<span>$result = generate();</span><br>
			<span>print_r($result); // => 13</span><br>
		</div>
		<p>
			Значение <span class="spanWarning"> age</span> оказалось доступно и программа выполнила вычисление 
		</p>
	</div>
<hr>
	<diV>
		<p>
			Задание не связано напрямую с уроков, просто пример по работе функций. Написать функцию, которая параметрами принимает два года рождения и возвращает строку в формате - "Разница в возрасте N". 
		</p>
		<?php 
			function getAgeDifference($year1, $year2){
				return "Разница в возрасте - ". abs($year1 - $year2);
			}

			print getAgeDifference(1993, 2022);
		?>
	</diV>
</div>
</div>
<a href="./lesson23.php">Далeе</a>
</body>
</html>