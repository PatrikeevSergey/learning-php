<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href = "../../css/style.css">
	<title>Урок 2</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div>
			<p>
				<h1>
					Первая программа
				</h1>
			</p>
		</div>

		<div>
			<p>
				По традиции начнем с написания программы "Hello, World". Она будет выводить на экран текст
			</p>
		</div>
		<div>
			<span>&lt;?php</span><br>
			<span>echo </span> <span class="spanWarning"> Hello,World!; </span><br>
			<span>//=> <i>Hello,World!</i></span>
		</div>
		<div>
			Для удобства будем показывать результат запуска строк кода так : => <span class="spanWarning"> Результат. </span>
			<p>
				Вывод на экран выполняется с помощью специальной команды <span class="spanWarning"> echo </span>, после которой в одиночных ковычках указывается строка для вывода. В конце обязательно поставить точку с запятой.
			</p>
			<p>
				Есть и другой способ вывести строку на экран. Для этого использования функции (с этим понятием познакомимся позже) <span class="spanWarning">print_r</span>. В этом случае строка указывается в скабках сразу после имени функции. В конце также нужно ставить <span class="spanWarning">;</span>
			</p>
			<div>
			<span>&lt;?php</span><br>
			<span>print_r( </span> <span class="spanWarning"> Hello,World!; </span>)<br>
			<span>//=> <i>Hello,World!</i></span>
		</div>
			<p>
				В простых ситуациях между этими конструкциями нет никакой разницы. Можно использовать как один способ, атк и другой. В более сложных, там где на экран будут выводиться не просто числа и строки, а, например, массива - <span class="spanWarning">echo</span> не сможет сделать этого, а <span class="spanWarning">print_r()</span> все выведет.
			</p>
			<h1>Теги</h1>
			<p>
				Если открыть файл или начать писать код сразу, то такой будет воспринят интепритатором (программаой, которая выполняет код), как обычный текст. Любой код PHP должен быть обернут в конструкцию <span class="spanWarning"><span>&lt;?php ?&gt;</span></span>. Это особенности данного языка программирования. 
			</p>
			<p>
				<span class="spanWarning">&lt;?php </span> - это открывающий тег, а <span class="spanWarning">?&gt;</span> - закрывающий. PHP позволяет не указывать закрывающий тег. А руководство по оформлению кода PSR-12 (с ним будет знакомство позже) вообще запрещает его указание.
			</p>
			<h1>
				Комментарии
			</h1>
			<p>
				Кроме кода, в файлах с исходным кодом могут находиться комментарии. Это текст, который не является частью программы, и нужен для пометок программистам. С их помощью добавляют пояснения, как работает код, какие ошибки нужно исправить, что0то не забыть добавить позже. 
			</p>
			<p>
				Комментарии в PHP бывают двух видов:
				<ul>
					<li>
						<i>Одностроковый комментарий</i> начинается с <span class="spanWarning">//</span>. После этих сомволов может следовать любой текст, вся строка не будет анализироваться и исполняться. 
						<div>
							<span>&lt;?php</span><br>
								<span>//  Комментарий 1 </span><br>
								<span>//  Комментарий 1 </span><br>
								<span>print_r(<span class="spanWarning">'Hello, World!'</span>);</span>
						</div>
					</li>
					<li>
						<i>Многострочные комментарии</i> начинаются с <span class="spanWarning">/*</span> и заканчиваются на <span class="spanWarning">*/</span>. Между ними каждая строка должна начинаться с символа <span class="spanWarning">*</span>
						<div>
							<span>&lt;?php</span><br>
								<span>/*  </span><br>
								<span>*Сделать цвет вывода текста красным, </span><br>
								<span>* А ссылок - зеленым </span><br>
								<span>*/</span><br>
								<span>print_r(<span class="spanWarning">'Hello, World!'</span>);</span>
						</div>
					</li>
				</ul>
			</p>
		</div>
	</div>
</div>
<a href = "./lesson3.php"> Далее </a>
</body>
</html>