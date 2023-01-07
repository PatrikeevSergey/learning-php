<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Функции с переменным сислом параметров</title>
</head>
<body>
<div class="container">
	<div class="row">
		<h1>
			Функции с переменным число параметров
		</h1>
		<p>
			Интересная особенность некоторых функций - принимать переменное число параметров. Речь идет не о значениях по умолчанию. Например:
		</p>
	<div>
		<span>&lt;?php</span><br>
		<span>max(1,10,3); // 10</span><br>
		<span>max(1,-3, 2,3,4) // 4</span>
	</div>
	<p>
		Функция <span class="spanWarning">max()</span> находит максимальное значение среди переданных параметров. Если открыть документация, то увидим интересную конструкцию:
	</p>
	<div>
		<span>&lt;?php</span><br>
		<span>max(mixed $value, mixed ...$values): mixed</span><br>
	</div>
	<p>
		Такая запись говорит о том, что эта функция принимает на вход два параметра и любое число необязательных. Необязательность передаваемых параметров описывается многоточием <span class="spanWarning">....</span>
	</p>
	</div>
</div>
</body>
</html>