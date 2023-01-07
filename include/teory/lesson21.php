<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Необязательные параметры функции</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div>
			<h1>
				Необязательные параметры функции
			</h1>
			<p>
				В программировании большое количество функций и методов имеют параметры, которые редко меняются. В таких случаях этим параметром задают значения по умолчанию, которые можно поменять при необходимости. Этим немного сокращается количество одинакового кода: 
			</p>
			<p>
		<div>
			<span>&lt;?php</span><br>
			<span>// функция возведения в степень</span><br>
			<span>// второй параметр имеет свойство по умолчанию 2</span><br>
			<span>function myPow ($x, $base = 2) {</span><br>
			<span>&nbsp;&nbsp;return $x ** $base;</span><br>
			<span>}</span><br><br><br>
			<span>//5 возведем в степень 2 (двойка задана по умолчанию)</span><br>
			<span>myPow(5); // 5 * 5 = 25;</span><br>
			<span>// пять возведем в пятую степень</span><br>
			<span>myPow(5,5); // 5 * 5 * 5 = 125 </span><br>
		</div>
			</p>
			<p>
				Значение по умолчанию выглядит как обычное присваение в определении. Оно срабатывает только в том случае, если параметр не задан. К этому нужно привыкнуть. 
			</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function myPrint($text = 'Значение по умолчанию') {</span><br>
			<span>&nbsp;&nbsp;print_r($text);</span><br>
			<span>}</span><br><br><br>
			<span>myPrint(); // => "Значение по умолчанию"</span><br>
			<span>myPrint("Привет"); // => Привет</span><br>
		</div>
			<p>
				Параметров со значением по умолчанию можеть быть сколько угодно:
			</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function Func($text1 = 'Значение по умолчанию 1', $a = 13, $b = 9) {</span><br>
			<span>&nbsp;&nbsp;.....</span><br>
			<span>}</span><br>
		</div>
			<p>
				У значений по умолчанию есть одно ограничение. Они должны идти в самом конце списка параметров. То есть, с точки зрения синтаксиса, невозможно создать функцию, у которой после необязательного параметра будет обязательный:  
			</p>
		<div>
			<span>&lt;?php</span><br>
			<span>// Такой код завершится с ошибкой</span><br>
			<span>function Func($a = 3, $b = 4, $c) {</span><br>
			<span>&nbsp;&nbsp;.....</span><br>
			<span>}</span><br>

			<span>// Такой будет работать без ошибок</span><br>
			<span>function Func1($c , $a = 3, $b = 4) {</span><br>
			<span>&nbsp;&nbsp;.....</span><br>
			<span>}</span><br>
		</div>
		</div>
		<hr>
	<p>
		Реализовать функцию getHiddenCard(), которая принимает на вход номер банковской карты (16 цифр) в веде строки и возвращает его скрытую версию, которая может использоваться на сайте для отображения. Если исходная карта имена номер <i>145765412357845356</i>, то скрытая должна выглядеть так ****5356. Другими словами, функция скрывает первые 12 символов на звездочки. Количество звездочек регулируется вторым, необязательным параметром. Значение по умолчанию - 4.
	</p>

<?php 
function getHiddenCard($srtNum, $hiddenNum = 4){
	return str_repeat("*", $hiddenNum) . mb_substr($srtNum,  - 4);
}

print getHiddenCard("145765412357845356");
?>
	</div>	
</div>
<a href="./lesson22.php">Далее</a>
</body>
</html>