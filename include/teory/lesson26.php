<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Тернарный оператор и Элвис</title>
</head>
<body>
<div class="container">
	<div class="row">
		<h1>
			Тернарный оператор и Элвис
		</h1>
		<p>
			Представим себе, что есть функция, которая на входе принимает число, а возвращает модуль этого числа. 
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function abs($number) {</span><br>
			<span>&nbsp;&nbsp;if ($number >= 0) {</span><br>
			<span>&nbsp;&nbsp;&nbsp;return $number;</span><br>
			<span>}</span><br><br>
			<span>&nbsp;&nbsp;return -$number;</span><br>
			<span>abs(10); // 10</span><br>
			<span>abs(-5); // 5</span><br>
		</div>
		<p>
			Можно ли записать эту функцию как-нибудь лаконичнее? что-то вроде <span class="spanWarning">return ответ зависит от условия</span>? Для этого справа от return должно быть выражение, но <span class="spanWarning">if</span> - это инструкция, а не выражение. <br>
			В PHP существует конструкция, которая по своему действует аналогичено <i>if-else</i>, но при этом является выражением. Она называется <b>тернарный оператор</b>. Тернарный оператор - единственный в своем роде оператор, требующий три операнда:
		<div>
			<span>&lt;?php</span><br>
			<span>function abs($number) {</span><br>
			<span>&nbsp;&nbsp;return $number >= 0 ? $number : -$number;</span><br>
			<span>}</span><br>
		</div>
		</p>
		<p>
			Общий паттерн выглядит так: <span class="spanWarning">&lt;predicate&gt; ? &lt;expression on true&gt; : &lt;expression on false&gt;</span><br>
			Перепишем функцию <span class="spanWarning">getTypeOfSentence()</span>:
		<div>
			<span>&lt;?php</span><br>
			<span>function getTypeOfSentence($sentence) {</span><br>
			<span>&nbsp;&nbsp;$lastChar = substr($sentence, -1);</span><br>
			<span>&nbsp;&nbsp;&nbsp;return ($lastChar === '?') ? 'вопростительное' : 'обычное';</span><br>
			<span>}</span><br><br>
			<span>getTypeOfSentence("Как дела?"); // "вопросительное"</span><br>
			<span>getTypeOfSentence("Хорошо"); // "обычное"</span><br>
		</div>
		</p>
		<p>
			Тернарный оператор можно вкладывать в тернарный оператор, потому что это - выражение. Делать этого не стоит, такой код тяжело читать и отлаживать, это плохая практика. 
		</p>
	</div>
	<div class="row">
		<h1>
			Оператор Элвис
		</h1>
		<p>
			Представим ситуацию, на сайте у пользователя может быть псевданим и имя. Имя не обязательно, но если оно есть, то нужно обращаться к человеку по имени, если его нет - по псевданиму. Сделаем функцию, которая собирает строку с приветствием человека по этим требованиям:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function generateGreeting($name, $nickname) {</span><br>
			<span>&nbsp;&nbsp;if ($name) {</span><br>
			<span>&nbsp;&nbsp;&nbsp;return "Hello, {$name}!";</span><br>
			<span>}else {</span><br>
			<span>&nbsp;&nbsp;&nbsp;return "Hello, {$nickname}!";</span><br>
			<span>}</span><br>
			<span>generateGreeting('Sergey', 'SerjP') // "Hello, Sergey!"</span><br>
			<span>generateGreeting('', 'SerjP'); // "Hello, SerjP"</span><br>
		</div>
		<p>
			Мы пользуемся тем фактом, что в PHP преобразовывает типы. В коде <span class="spanWarning">if ($name)</span> PHP превратит <span class="spanWarning">$name</span> в тип <span class="spanWarning">bool</span>  - если была пустая строка, то получится <span class="spanWarning">false</span>, и ином случае получается <span class="spanWarning">true</span>. С тернарным оператором можно получить более короткую запись. 
			<div>
				<span>&lt;?php</span><br>
				<span>function generateGreeting($name, $nickname) {</span><br>
				<span>&nbsp;&nbsp;return $name ? "Hello, {$name}!" : "Hello, {$nickname}!";</span><br>
				<span>}</span><br>
			</div>
		<p>
			Это частный случай, мы оперируем <span class="spanWarning">bool</span> и получаем первое значение, если оно <span class="spanWarning">true</span> и второе в ином случае. В PHP для таких случаем есть специальный оператор:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function generateGreeting($name, $nickname) {</span><br>
			<span>&nbsp;&nbsp;$user = $name ?: $nickname;</span><br>
			<span>&nbsp;&nbsp;return "Hello, {$name}!";</span><br>
			<span>}</span><br>
		</div>
		<p>
			<b><span class="spanWarning">?: </span> - бинарный оператор, который возвращает первый операнд, если он интинен, и второй в ином случае.</b><br>
			Его называют Elvis, потому что созвучно с "else if".
		</p>
		</p>
	</div>
	<div>
		<hr>
		<p>
			Реализовать функцию convertText(), которая принимает на вход строку и, если буква заглавная, то строка возвращается без изменений, если первая буква не заглавна - функция возвращает перевернутый вариант.
		</p>
		<p>
			<?php
				function convertText($word){
					if (ctype_lower($word)){
						return strrev($word);
					}else {
						return $word;
					}
				}
				print convertText('sergey') . '<br>' . convertText('Sergey');
			?>
		</p>
	</div>
<a href="./lesson27.php">Далее</a>
</div>
</body>
</html>
<?php
print "<hr>";
function isEven($num){
	return $num % 2 === 0;
}

function increaseNum($num){
	return $num + 10;
}

$num = 6;

$result = isEven(increaseNum($num) + 1) ? $num + 1 : 1 - $num;
print $result;
print "<hr>";

$testScore = 10;
$result = $testScore < 10 ? 'bad' : 'good';
print $result;
?>