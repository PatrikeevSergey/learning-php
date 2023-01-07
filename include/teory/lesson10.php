<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Интерполяция</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div>
			<h1>
				Интерполяция
			</h1>
			<p>
				Представим, что стоит задача сделать заголовок письма из двух переменныз и знаков преминания. Скорее всего решение будет таким:
			<div>
				<span>&lt;?php</span><br>
				<span>$name = 'Иван';</span><br>
				<span>$firstName = 'Иванов';</span><br>
				<span>print_r($name . ', ' . $firstName . '. ');// => Иван, Иванов.</span><br>
			</div>
			</p>
			<p>
				Здесь нужно следить за несколькими кавычками и пробелами и понимать, где что заканчивается и начинается. <br>
				Есть более удобный способ решения такой же задачи, называется <b>интерполяция</b>. Вот, пример кода:
			</p>
			<div>
				<span>&lt;?php</span><br>
				<span>$name = 'Иван';</span><br>
				<span>$firstName = 'Иванов';</span><br>
				<span>// Стоит обратить внимание на то, что ограничители строки - </span><br>
				<span>// двойные кавычки. </span><br>
				<span>// Интерполяция не работает с одинарными кавычками</span><br>
				<span>print_r("{$name}, {$firstName}.");// => Иван, Иванов.</span><br>
			</div>
			<p>
				В коде была создана одна строка и в нужном порядке подставлены в нее переменные с помощью фигурных скобок (<span class="spanWarning">{}</span>). Получается что-то вроде бланка, куда внесены нужные значения. С их помощью нет необходимости больше заботиться об отдельных строках для знаков препинания и пробелов - символы просто записаны в строке - шаблоне. <br>
				В одной строке можно делать сколько угодно блоков с фигурными скобками. <br>
				<b>Интеполяция работает только со строками в двойных кавычках.</b><br>
				Почти во всех языках программирования интерполяция предпочтительнее конкатенации для объединения строк. Строка в этом случае уже склеена и внутри нее хорошо просматривается пробелы и другие символы.
			</p>
		</div>
	</div>
</div>
</body>
</html>