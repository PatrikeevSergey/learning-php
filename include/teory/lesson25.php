<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Условные конструкции if и if-else </title>
</head>
<body>
<div class="container">
	<div class="row">
		<h1>
			Условные конструкции if и if-else 
		</h1>	
		<h2>
			if
		</h2>
		<p>
			Задача предиката - получить ответ на вопрос, но обычно этого недоастаточно и нужно выполнить определенное действие в завимисости от ответа. <br>
			Создадим функци, которая определит тип переданного предложения. Для начала будет отличать обычные предложения от вопросительных.
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function getTypeOfSentence($sentence) {</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;//Извлекаем последний символ</span><br>
			<span>&nbsp;&nbsp;$lastChar = $sentence[-1];</span><br>
			<span>&nbsp;&nbsp;if ($lastChar === '?') {</span><br>
			<span>&nbsp;&nbsp;&nbsp; return 'Вопросительное';</span><br>
			<span>&nbsp;&nbsp;&nbsp; }</span><br>
			<span>&nbsp;&nbsp;return 'Обычное';</span><br>
			<span>}</span><br>
			<span>getTypeOfSentence("Как дела?"); // Вопросительное</span><br>
			<span>getTypeOfSentence("Доброе утро."); // Обычное</span><br>
		</div>
		<p>
			<span class="spanWarning">if </span> - инструкция. В скобках ей передается выражение - предикат, а затем описывается блок кода в фигурных скобках. Этот блок кода будет выполнен, только если предикат - истина. Если предикат - ложб, то блок кода в фигурных сбоках пропускается, и функция продолжает свое выполнение дальше. В нашем случае следующая строчка кода - <span class="spanWarning">return 'Обычно'; </span> - заставит функцию вернуть строку и завершиться. Как видно <span class="spanWarning">return</span> может находиться где угодно в функции. В том числе внетри блока кода с условием.
		</p>
	</div>
	<div class="row">
		<h2>
			else
		</h2>
		<p>
			Преобразуем написанную выше функцию так, чтобы она возвращала не просто тип предложения, а целую строку <i>Предложение обычное</i> или <i>Предложение вопросительное</i>. 
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function getTypeOfSentence($sentence) {</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;//Извлекаем последний символ</span><br>
			<span>&nbsp;&nbsp;$lastChar = $sentence[-1];</span><br>
			<span>&nbsp;&nbsp;if ($lastChar === '?') {</span><br>
			<span>&nbsp;&nbsp;&nbsp; $typeSetence = 'вопросительное';</span><br>
			<span>&nbsp;&nbsp;&nbsp; }else {</span><br>
			<span>&nbsp;&nbsp;&nbsp;$typeSetence = 'обычное';</span><br>
			<span>&nbsp;&nbsp;}</span><br>
			<span>&nbsp;&nbsp; return "Предложение {$typeSetence};"</span>
			<span>}</span><br>
			<span>getTypeOfSentence("Как дела?"); // Предложение вопросительное</span><br>
			<span>getTypeOfSentence("Доброе утро."); // Предложение обычное</span><br>
		</div>
		<p>
			Добавили <span class="spanWarning">spen</span> и новый блок с фигурными скобками. Этот блок выпоняется, только если условие <span class="spanWarning">if </span> - ложь. <br>
			Существует два способа формироваться конструкции <i>if - else</i>. С помощью отрицания <span class="spanWarning">!==</span> можно изменить порядок блоков:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function getTypeOfSentence($sentence) {</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;//Извлекаем последний символ</span><br>
			<span>&nbsp;&nbsp;$lastChar = $sentence[-1];</span><br>
			<span>&nbsp;&nbsp;if ($lastChar !== '?') {</span><br>
			<span>&nbsp;&nbsp;&nbsp; $typeSetence = 'обычное';</span><br>
			<span>&nbsp;&nbsp;&nbsp; }else {</span><br>
			<span>&nbsp;&nbsp;&nbsp;$typeSetence = 'вопросительное';</span><br>
			<span>&nbsp;&nbsp;}</span><br>
			<span>&nbsp;&nbsp; return "Предложение {$typeSetence};"</span><br>
			<span>}</span><br>
			<span>getTypeOfSentence("Как дела?"); // Предложение вопросительное</span><br>
			<span>getTypeOfSentence("Доброе утро."); // Предложение обычное</span><br>
		</div>
		<p>
			Какой из способов предпочтительнее? Чуловеческому мозгу проще думать прямолинейно, а не через отрицание. Лучше стараться выбирать проверку, которая не содержит отрицания и подставивать содержимое блоков под нее.
		</p>
	</div>
	<div class="row">
		<h1>
			Конструкция else if
		</h1>
		<p>
			Функция <span class="spanWarning">getTypeOfSentence()</span> различает только восклицательное и обычное предложение. Можно реализовать поддержку восклицательного предложения:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function getTypeOfSentence($sentence) {</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;//Извлекаем последний символ</span><br>
			<span>&nbsp;&nbsp;$lastChar = $sentence[-1];</span><br>
			<span>&nbsp;&nbsp;if ($lastChar === '!') {</span><br>
			<span>&nbsp;&nbsp;&nbsp; $typeSetence = 'восклицательное';</span><br>
			<span>&nbsp;&nbsp;&nbsp; }else {</span><br>
			<span>&nbsp;&nbsp;&nbsp;$typeSetence = 'обычное';</span><br>
			<span>&nbsp;&nbsp;}</span><br>
			<span>&nbsp;&nbsp;if ($lastChar === '?') {</span><br>
			<span>&nbsp;&nbsp;&nbsp;$typeSetence = 'вопросительное';</span><br>
			<span>&nbsp;&nbsp;}</span><br>
			<span>&nbsp;&nbsp; return "Предложение {$typeSetence};"</span><br>
			<span>}</span><br>
			<span>getTypeOfSentence("Что?"); // Предложение вопросительное</span><br>
			<span>getTypeOfSentence("Нет"); // Предложение обычное</span><br>
			<span>getTypeOfSentence("Нет!"); // Предложение восклицательное</span><br>
		</div>
		<p>
			Добавлена еще одна проверка - восклицание. Технически функция работает, но с точки зрения симантики есть проблемы. 
			<ul>
				<li>
					Проверка на наличие восклицательного знака проходит в любом случае, даже если был обнаружен восклицательный знак;
				</li>
				<li>
					Ветка <span class="spanWarning">else </span> написана относительно первого условия, а не второго.
 				</li>
			</ul>
		</p>
		<p>
			Переделаем функцию на более правильную:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function getTypeOfSentence($sentence) {</span><br>
			<span>&nbsp;&nbsp;$lastChar = $sentence[-1];</span><br>
			<span>&nbsp;&nbsp;if ($lastChar === '!') {</span><br>
			<span>&nbsp;&nbsp;&nbsp; $typeSetence = 'восклицательное';</span><br>
			<span>&nbsp;&nbsp;&nbsp; } elseif ($lastChar === '?') {</span><br>
			<span>&nbsp;&nbsp;&nbsp;$typeSetence = 'вопросительное';</span><br>
			<span>&nbsp;&nbsp;}else {</span><br>
			<span>&nbsp;&nbsp;&nbsp;$typeSetence = 'обычное';</span><br>
			<span>&nbsp;&nbsp;}</span><br>
			<span>&nbsp;&nbsp; return "Предложение {$typeSetence};"</span><br>
			<span>}</span><br>
			<span>getTypeOfSentence("Что?"); // Предложение вопросительное</span><br>
			<span>getTypeOfSentence("Нет"); // Предложение обычное</span><br>
			<span>getTypeOfSentence("Нет!"); // Предложение восклицательное</span><br>
		</div>
		<p>
			Теперь все условия выстроены в единую конструкцию. <span class="spanWarning">elseif </span> это "если не выполнено предыдущее условие, но выполнено текущие". Получается такая смеха: 
			<ul>
				<li>
					Если последний символ <span class="spanWarning">?</span>, то '<span class="spanWarning">вопросительное</span>';
				</li>
				<li>
					Иначе, если последний символ <span class="spanWarning">!</span>, то '<span class="spanWarning">восклицательное</span>';
				</li>
				<li>
					Иначе - <span class="spanWarning">обычное</span>
				</li>
			</ul>
		</p>
	</div>
	<hr>
	<div class="row">
		<p>
			Реализовать функцию normalizeUrl(), которая выполняет атк называемую нормализацию данных. Она принимает арлес сайта и возвращает его с https:// в начале. Функция принимает адреса в виде:
			<ul>
				<li>
					Адрес
				</li>
				<li>
					http://Адрес
				</li>
				<li>
					https://Адрес
				</li>
			</ul>
		</p>
		<p>
			Но всегда возвращает в виде https://Адрес
		</p>
		<hr>
	</div>
	<div class="row">
		<p>
			<?php
				function normalizeUrl($url){
					if (substr($url, 0, 8) === 'https://'){
						return "{$url} без изменений";
					}elseif (substr($url, 0, 7) === 'http://') {
						return "https://".substr($url, 7, strlen($url));
					}else {
						return "https://".substr($url, 0, strlen($url));
					}
				}

				print (normalizeUrl('http://sdkjglsdkjgshdlgjsdlfhgjdfshldfjkgh;kj'));
			?>
		</p>	
	</div>
<a href="./lesson26.php"> Далее </a>
</div>
</body>
</html>