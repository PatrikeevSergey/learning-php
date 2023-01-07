<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Возврат значений из функции</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div>
			<h1>
				Возврат значений из функции
			</h1>
			<p>
				Те функции, который определяли ранее, заканчивали свою работу тем, что печатали на экран что-то. <br>
				Пользы от такие функций очень мало, т.к. результатом их работы невозможно воспользоваться внутри программы. Рассмотрим на примере создания логина для сайта. Когда пользователь регистрируется на сайте, он может создать логин любым способом. 
				<ul>
					<li>
						Добавив пробелы в начале или конце;
					</li>
					<li>
						Использовать буквы в разных регистрах.
					</li>
				</ul>
			</p>
			<p>
				Если отправить в базу данных такой логин, то пользователь не сможет в дальнейшем войти, вбивая адрес без пробелом и в нужном регистре. Чтобы этого не произошло. логин нужно подготовить для записи в базу данных. А именно: привести к нижнему регистру и обрезать пробелы вначале и в конце. Напишем функцию:
		<div>
			<span>&lt;?php</span><br>
			<span>function saveLogin() {</span><br>
			<span>&nbsp;&nbsp;$login = '       SERgey ';</span><br>
			<span>&nbsp;&nbsp;$trimmedLogin = trim($login); // отрезаем от логина в начале и конце пробелы</span><br>
			<span>&nbsp;&nbsp;$preparedLogin = strtolower($trimmedLogin);</span><br>
			<span>&nbsp;&nbsp;print_r($preparedLogin); </span><br>
			<span>//Здесь будет запись в базу данных</span><br>
			<span>}</span><br><br><br>
			</p>
		</div>
		<p>
			Этот код стал возможет только благодаря возврату значения. Функции <span class="spanWarning">trim()</span> и <span class="spanWarning">strtolower()</span> ничего не печатают на экран, но <b>возвращают</b> результат своей работы, и поэтому мы можем записать его в переменные. Если бы они вместо этого печатали что-то на экран, мы не не могли присвоить результат их работы переменной. Как это делалось в первой нашей функции. 
		</p>
	<div>
		<span>&lt;?php</span><br>
		<span>$message = showGreeting();</span><br>
		<span>var_dump($message); // => <i>NULL</i></span><br>
	</div>
		<p>
			Изменим эту функцию: 
		</p>
	<div>
		<span>&lt;?php</span><br>
		<span>function showGreeting() {</span><br>
		<span>&nbsp;&nbsp;return "Добро пожаловать!";</span><br>
		<span>}</span><br><br><br>
		<span>// Вызываем функцию</span><br>
		<span>$message = showGreeting(); //теперь можно использовать результат работы функции</span><br>
		<span>print_r($message); // => "Добро пожаловать! "</span><br>
	</div>
		<p>
			<span class="spanWarning">return </span> - особая инструкция, которая берет выражение, записанное справа, и отдает его наружу тому коду, который вызвал метод. Как только PHP натыкается на <span class="spanWarning">return </span>, выполнение функции на этом завершается. Например: 
		</p>
		<p>
			Любой код после <span class="spanWarning">return </span> выполяться не будет:
		</p>
	<div>
		<span>&lt;?php</span><br>
		<span>function showGreeting() {</span><br>
		<span>&nbsp;&nbsp;return "Добро пожаловать!";</span><br>
		<span>&nbsp;&nbsp;print_r ("это сообщение не выведется на экран");</span><br>
		<span>}</span><br><br><br>
		<span>// Вызываем функцию</span><br>
		<span>$message = showGreeting(); </span><br>
		<span>print_r($message); // => "Добро пожаловать! "</span><br>
	</div>
		<p>
			Даже если функция возвращает данные, это не ограничивает ее в том, что она может и печатать: 
		</p>
		<div>
		<span>&lt;?php</span><br>
		<span>function showGreeting() {</span><br>
		<span>&nbsp;&nbsp;print_r ("это сообщение выведется на экран");</span><br>
		<span>&nbsp;&nbsp;return "Добро пожаловать!";</span><br>
		<span>}</span><br><br><br>
		<span>// Вызываем функцию</span><br>
		<span>$message = showGreeting(); </span><br>
		<span>print_r($message); // => "это сообщение выведется на экранДобро пожаловать! "</span><br>
	</div>
		<p>
			Возвращать можно не только конкретные значения. <span class="spanWarning">Return </span> работает с выражениями, которые справа от него, может появиться почти все, что угодно. Здесь необходимо руководствоваться принципами читаемостью кода: 
		</p>
	<div>
		<span>&lt;?php</span><br>
		<span>function showGreeting() {</span><br>
		<span>&nbsp;&nbsp;$message = "Добро пожаловать!";</span><br>
		<span>&nbsp;&nbsp;return $message;</span><br>
		<span>}</span>
	</div>
	<p>
		Здесь не возвращается переменная, возвращается всегда значение, которое находится в этой переменной.
	</p>
</div>
<a href="./lesson20.php">Далее </a>
</body>
</html>
