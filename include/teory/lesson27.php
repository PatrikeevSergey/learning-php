<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Конструкция Swith</title>
</head>
<body>
<div class="container">
	<div class="row">
		<h1>
			Конструкция Switch
		</h1>
		<p>
			Многие языки в дополнение к условной конструкции <i>if</i> включают в себя <b>switch</b>. Это специализорованная версия <i>if</i>, созданная для некоторых подобный случаев. Например, ее имеет смысл использовать там, где есть цепочка <i>if-else</i> с проверкой равенства.
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>if ($status === 'processing'){</span><br>
			<span>&nbsp;&nbsp;// 1</span><br>
			<span>} elseif ($status === 'paid'){</span><br>
			<span>&nbsp;&nbsp; // 2 </span><br>
			<span>} elseif ($status === 'new'){</span><br>
			<span>&nbsp;&nbsp; // 3 </span><br>
			<span>} else {</span><br>
			<span>&nbsp;&nbsp; // 4 </span><br>
			<span>}</span><br>
		</div>
		<p>
			Эта состовная проверка обладает одной отличительной чертов, каждая ветка здесь, это проверка значения переменной <span class="spanWarning">$status</span>. Switch позволяет записать этот код короче и выразительнее:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>switch ($status) {</span><br>
			<span>&nbsp;&nbsp; case 'processing' : // $status == processing</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; // 1</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; break;</span><br>
			<span>&nbsp;&nbsp; case 'paid' : // $status == paid</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; // 2</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;break;</span><br>
			<span>&nbsp;&nbsp; case 'new' : // $status == new</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; // 3</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;break;</span><br>
			<span>&nbsp;&nbsp; default: // else </span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; // 4</span><br>
			<span>}</span><br>
		</div>
		<p>
			Свитч довольно сложная конструкция с точки зрения количества элементов из которых она состоит:
			<ul>
				<li>
					Внешнее описание, в которое входит ключевое слово <span class="spanWarning">switch</span>. Переменная, по значениям которой <i>switch</i> будет выбирать поведение. И фигурные скобки для вариантов выбора. 
				</li>
				<li>
					Конструкция <span class="spanWarning">case</span> и <span class="spanWarning">default</span>, внутри которых описывается поведение разные значений рассматриваемой переменной. Каждый <span class="spanWarning">case</span> соотстветствует <span class="spanWarning">if</span> в примере выше. <span class="spanWarning">default</span> это особая ситуация, соответствующая ветке <span class="spanWarning">else</span> в условных конструкциях. Как и <span class="spanWarning">else</span>, указывать <span class="spanWarning">default</span> не обязательно. 
				</li>
				<li>
					<span class="spanWarning">break</span> нужен для предотвращения "провеливания". Если его не указывать, то после выполняния нужно <span class="spanWarning">case</span> выполнение перейдет к следущему <span class="spanWarning">case</span> и так любо до ближайшего <span class="spanWarning">break</span>, либо до конца <i>switch</i>.
				</li>
			</ul>
		</p>
		<p>
			Фигурные скобки в <i>switch</i> не определяют блок кода как это было в других местах. Внутри допустим только тот синтаксис, который показан выше. То есть там можно использоваться <span class="spanWarning">case</span> или <span class="spanWarning">default</span>. А вот внутри каждого <span class="spanWarning">case</span> (и <span class="spanWarning">default</span>) ситуация другая. Здесь можно выполнить любой произвольный код:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>switch ($count) {</span><br>
			<span>&nbsp;&nbsp; case 1:</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; // делается что-то</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; break;</span><br>
			<span>&nbsp;&nbsp; case 2:</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; // делается что-то полезное</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;break;</span><br>
			<span>&nbsp;&nbsp; default:</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp; // здесь тоже делается что-то полезное</span><br>
			<span>}</span><br>
		</div>
		<p>
			Иногда, результат, полученный внутри <span class="spanWarning">case</span> это конец выполнения функции, содержащий <i>switch</i>. В таком случае его нужно как-то вернуть наружу. Для этого решения есть два способа.<br>
			Первый, создать переменную перед <i>switch</i>, запонить ее в <i>case</i> и затем, в конце, вернуть значение этой переменной наружу.
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function doSomethingGood($count){</span><br>
			<span>&nbsp;&nbsp; switch ($count) {</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;case 1:</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result = 'one';</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;case 2: </span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result = 'two';</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;default:</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result = null;</span><br>
			<span>&nbsp;&nbsp;}</span><br>
			<span>&nbsp;&nbsp;return $result;</span><br>
			<span>}</span><br>
		</div>
		<p>
			Второй способ проще и короче. Вместо создания переменной, <i>case</i> позволяет внутри себя делать обычный возврат функции. А как известно после <span class="spanWarning">return</span> никакой код выполняться не будет, то можно избавиться от <span class="spanWarning">break</span>:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function doSomethingGood($count){</span><br>
			<span>&nbsp;&nbsp; switch ($count) {</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;case 1:</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 'one';</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;case 2: </span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 'two';</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;default:</span><br>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return null;</span><br>
			<span>&nbsp;&nbsp;}</span><br>
			<span>}</span><br>
		</div>
		<p>
			Switch хоть и встречается в коде, но технически можно обойтись без него. Ключавая пользова его использования в том, что он лучше выражает намерение программиста, когда нужно проверить конкретные значения переменной. Хотя кода и стало, физически, чуть больше, читать его легче, относительно блоком <i>elseif</i>.
		</p>
		<hr>
	</div>
	<div class="row">
		<p>
			В этом задании предстоит реализовать простейший калькулятор. Функция calculate() принимает следующие аргументы:
			<ul>
				<li>
					Операция в виде строки (поддерживается 4 операции +,-,*,/);
				</li>
				<li>
					Два числа (первый и второй операнд)
				</li>
			</ul>
 		</p>
 		<p>
 			Результат работы функции явдяется применения к числам. Если передается операция, которая не поддерживается, то функция должна вернуть null.
 		</p>
 		<p>
 			<?php
 				function calculate($operation, $number1, $number2){
 					if (gettype($operation) !== 'string'){
 						return "Ошибка! Первый аргумент функции должен быть в виде строки. Поддерживаются 4 операции - <span class = \"spanWarning\"> +</span>, <span class = \"spanWarning\">-</span>,<span class = \"spanWarning\"> *</span>, <span class = \"spanWarning\">/</span>";
 					}else {
 						switch ($operation) {
 							case '+':
 								$result = $number1 + $number2;
 								return $result;
 							case '-': 
 							$result = $number1 - $number2;
 								return $result;
 							case '*':
 							$result = $number1 * $number2;
 								return $result;
 							case '/';
 								$result = $number1 / $number2;
 								return $result;
 							default: 
 								return "null";
 						}
 					}

 				}

 				print calculate('*', 265, 2.11111111);
 			?>
 		</p>
	</div>
<a href="./lesson28.php">Далее </a>
</div>
</body>
</html>