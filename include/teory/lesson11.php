<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Извлечение символов из строки</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div>
			<h1>
				Извлечение символов из строки	
			</h1>
			<p>
				Иногда нужно получить один символ из строки. Например, сайт знает фамилию и имя пользователя, и в какой-то момент надо вывести информацию в формате <span class="spanWarning">Sergey P.</span>, то нужнл взять первый символ из фамилии. Например:
			</p>
		</div>
		<div>
				<span>&lt;?php</span><br>
				<span>$name = 'Sergey';</span><br>
				<span>$surname = 'Petrov';</span><br>
				<span>print_r("{$name} {$surname[0]}"); // => Sergey P.</span><br>
			</div>
		<p>
			Квадратные скобки с цифрой - специальный оператор извлечения строки. Эта цифра называется <b>индексом</b> - позицией символа внутри строки. Индексы начинаются с 0 почти во всех языках программирования. Поэтому, если нужно вывести первый символ - указывается индекс <span class="spanWarning">0</span>. <br>
			Индекс последнего элемента равен длине строки минус единица:
		</p>
		<div>
		<span>&lt;?php</span><br>
			<span>//Длина строки 6, поэтому последний индекс - 5</span><br>
			<span>$name = 'Sergey';</span><br>
			<span>print_r($name[5]); // => y</span><br>
		</div>
		<p>
			Разрешается использовать отрицательные индексы. В этом случае идет обращение к симловам, начиная с конца строки. <span class="spanWarning"> -1</span> - индекс последнего символа, <span class="spanWarning">-2</span> - индекс предпоследнего символа и т.д. В отличие от прямой индексации, в обратной отсчет идет от <span class="spanWarning"> -1 </span>
		</p>
		<p>
			Индексом может быть не только конкретное число, но и значение с переменной. Вот например, в результате работы программы на экран выведется буква е, индекс внутри квадратных скобок записан не числом, а переменной и равен 1.
		</p>
		<div>
		<span>&lt;?php</span><br>
			<span>$name = 'Sergey';</span><br>
			<span>$index = 1;</span><br>
			<span>print_r($name[$index]); // => e</span><br>
		</div>
	</div>
</div>
</body>
</html>
