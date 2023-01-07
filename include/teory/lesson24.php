<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Логические операции</title>
</head>
<body>
<div class="container">
	<div class="row">
		<h1>
			Логические операции
		</h1>
		<p>
			Кроме арифметических операции со школы известны операции сравнения. Например, <span class="spanWarning">1 > 2</span>. Это звучит, как вопрос: "один больше чем два?". Ответ - да. В других случаях ответом может быть и "нет" (например, <span class="spanWarning">2 < 5</span>). <br>
			Операции сравнения не имею привязки к числам. Сравнить можно все, что угодно, например, строки. Каждый раз, когда пользователья заходит на какой-то сайт, внутри сайта происходит сравнение логина и пароля с теми, какие есть в базе. И только если они есть и верны, пускают во внутрь (аутентифицируют). <br>
			Языки программирования адаптировали все математические операции сравнения практически в неизменном виде. Единственное серьезное отличие - операторы равенства и неравенства. В математике для этого используют обычное равно <span class="spanWarning">=</span>, в програмировании такое встречается не часто. Во многих языках символ <span class="spanWarning">=</span> используется для присваивания значений переменным. Поэтому для сравнения взяли <span class="spanWarning">==</span> или <span class="spanWarning">===</span>.<br>
			Список операций сравннения:
			<ul>
				<li>
					<span class="spanWarning"><</span> меньше;
				</li>
				<li>
					<span class="spanWarning"><= </span> меньше или равно;
				</li>
				<li>
					<span class="spanWarning">></span> больше;
				</li>
				<li>
					<span class="spanWarning">>=</span> больше или равно;
				</li>
				<li>
					<span class="spanWarning">===</span> равно;
				</li>
				<li>
					<span class="spanWarning">!==</span> не равно;
				</li>
			</ul>
			<br>
		</p>
		<p>
			<i>
				Для равенства и неравенства также существуют операторы <span class="spanWarning">==</span> и <span class="spanWarning">!=</span>, которые использоваться не будут из-за потенциальной опасности. Об этом ниже.
			</i>
			Логическая операция типа <span class="spanWarning">6 > 4</span> или <span class="spanWarning">$password === $text </span> - это выражение, и его результат значение <span class="spanWarning">true</span> ("Истина") или <span class="spanWarning">false</span>("Ложь"). Это новый тип данных - bool. Он содержит всего лишь два этих значения. Наряду со строками (string) и целыми и рациональными числами, тип bool (булев) - это один из примитивных типов данных в PHP.
			<div>
				<span>&lt;?php</span><br>
				<span>$result = 8 > 3; </span><br>
				<span>print_r($result); // => true</span><br>
				<span>print_r('two' !== 'two'); // => false</span>
			</div> 
		</p>
	</div>
	<div class="row">
		<h1>
			Предикаты
		</h1>
		<p>
			Напишем примитивную функцию, которая принимает на вход возраст ребенка и определяет, младенец он или нет. Младенцем считается ребенок до года. <br>
			Пользуемся тем фактором, что любая операция - выражение. поэтому единственной стройчкой функции напишем "вернуть то значение, которое получился в результате сравнения <span class="spanWarning">$age < 1</span>". <br>
			В зависимости от пришедшего аргумента сравнения будет либо истинным (<span class="spanWarning">true</span>), либо ложным (<span class="spanWarning">false</span>), а <span class="spanWarning">return</span> вернет этот результат.
		</p>
			<div>
			<span>&lt;?php</span><br>
			<span>function isInfant($age) {</span><br>
			<span>&nbsp;&nbsp;return $age < 1;</span><br>
			<span>}</span><br><br>
			<span>var_dump(isInfant(3)) // => false;</span><br>
			<span>var_dump(isInfant(0.5)) // => true;</span><br>
		</div>
		<p>
			Подобные функции называют предикатами. Функция - предикат или функция - вопросы отвечают на некой вопрос и всегда (без исключений!) возвращают <span class="spanWarning">true</span> ("Истина") или <span class="spanWarning">false</span>("Ложь"). Предикаты во всех языках принято называть особым образом для простоты анализа. В PHP предикаты, как правило, начинаются с префикса <span class="spanWarning">is</span>, <span class="spanWarning">has </span> или <span class="spanWarning">can</span>, но не ограничиваются этими словами. Например:
			<ul>
				<li>
					<span class="spanWarning">isInfant()</span> - "Младенец ли?";
				</li>
				<li>
					<span class="spanWarning">hasChildren()</span> - "Есть ли дети?";
				</li>
				<li>
					<span class="spanWarning">isEmpty()</span> - "Пусто ли?";
				</li>
				<li>
					<span class="spanWarning">hasErrors()</span> - "Есть ли ошибки?";
				</li>
			</ul>
		</p>
	</div>
	<div>
		<h1>
			Комбинирование операций и функций
		</h1>
		<p>
			Логические операции - выражения. Значит, <b>логические операции можно комбинировать с другими выражениями</b>. Например, мы хотим проверить чесность числа, т.е. кратность двум. В программировании используют подход: 
			<ul>
				<li>
					Проверяют остаток от деления на 2:
					<ul>
						<li>
							Если остаток равен 0, то число четное
						</li>
						<li>
							Если остаток не равен 0, то число нечетное
						</li>
					</ul>
				</li>
			</ul>
		</p>
		<p>
			Остаток от деления - простая, но очень важная концепкия в арифметике, алгебре, в теории чисел и криптографии. Идея проста: нужно разделить число на несколько равных групп, или если в конце что-то станется - это и есть остаток от деления. Например, разделим кофенты между людьми:
			<ul>
				<li>
					7 конфет, 2 человека: 2 х 3 + <b>остаток 1</b>. Значит, 7 не кратно 2.
				</li>
				<li>
					21 конфета, 3 человека: 3 х 7 + <b>остаток 0</b>. Значит, 21 не кратно 3.
				</li>
			</ul>
		</p>
		<p>
			Оператор <span class="spanWarning">%</span> вычисляет отстаток от деления (не путать с делением):
			<ul>
				<li>
					<span class="spanWarning">7 % 2</span> -> <span class="spanWarning">1</span>
				</li>
				<li>
					<span class="spanWarning">21 % 3</span> -> <span class="spanWarning">0</span>
				</li>
			</ul>
		</p>
		<p>
			Можно написать функцию, которая будет проводить проверку на четность:
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function isEven($number) {</span><br>
			<span>&nbsp;&nbsp;return $number % 2 === 0;</span><br>
			<span>}</span><br>
			<span>isEven(10); // true</span><br>
			<span>isEven(5); // false</span><br>
		</div>
		<p>
			В одном выражении скоибинированы логический оператор <span class="spanWarning">===</span> (проверка равенства) и арифметический оператор <span class="spanWarning">%</span>. Приоритет арифметических операций выше логических, значит, сначала вычисляется арифметическое выражение <span class="spanWarning">$number % 2</span>, затем результат участвует в логическом сравнении. По-русски это расшифровать так: "Вычислить остаток от деления числа <span class="spanWarning">$number</span> на 2 и сравнить, равен ли остаток от деления нулю. Затем вернуть результат проверки равенства".
		</p>
	</div>
	<div class="row">
		<h1> 
			Логические операторы 
		</h1>
		<p>
			Логические выражения могут объединяться друг с другом, создавая все более хитрые проверки. Хороший пример - проверка пароля. Как известно, некоторые сайты при регистрации хотят длину пароля от 5 до 15 (например) символов. В математике написали бы что-то похожее <span class="spanWarning">5 < x < 15</span> (где <span class="spanWarning">x</span> длина конкретного пароля). Но в PHP такой трюк не пройдет. Нужно сделать 2 отдельных логических выражения и соединить их логическим И. 
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function hasSpecianChars($str) {</span><br>
			<span>//проверяет содержание специальных символов в строке</span><br>
			<span>}</span><br><br>

			<span>function isCorrentPassword($password) {</span><br>
			<span>&nbsp;&nbsp;$length = strlen($password);</span><br>
			<span>&nbsp;&nbsp;// скобки задают приоритет. </span><br>
			<span>&nbsp;&nbsp;return ($length > 5 && $length < 15 ) && hasSpecianChars($password);</span><br>
			<span>}</span><br><br>
			<span>isCorrentPassword('Qwerty'); // true</span><br>
			<span>isCorrentPassword('123'); // false</span><br>
			<span>isCorrentPassword('ahfbvnvlsadadvrgbgffnbgfngn'); // false</span><br>
		</div>
		<p>
			<span class="spanWarning">&& </span> - логическое "И" (в математической логике это называют конъюнкцией). Все выражение считается истинным только в том случае, когда интинен каждый операнд - каждое из составных выражений. Иными словами, <span class="spanWarning">&& </span> означает "и то, и другое". Приоритет этого оператора ниже, чем приоритет операторов сравнения, поэтому выражение отрабатывает правильно без скобок. Кроме <span class="spanWarning">&& </span>, часто используется оператор <span class="spanWarning"> || </span> - "ИЛИ" (дизъюнкция). Он означает "или то, или другое, или оба". Операторы можно комбинировать в любом количестве и в любой последовательности, но когда одновременно встречаются <span class="spanWarning">&&</span> или <span class="spanWarning">||</span>, то преоритет лучше задавать скобками. <br>
			Область математики, которая изучает логические операторы, называется булевой алгеброй. Ниже показаны "таблицы истинности" - по ним можно определить, каким будет результат применения оператора:
			<p>
				<b>И</b><span class="spanWarning">&&</span>
			</p>
			<table border="1px">
				<tr>
					<th>
						A
					</th>
					<th>
						B
					</th>
					<th>
						A <span class="spanWarning">&& </span> B
					</th>
					<tr><td>TRUE</td><td>TRUE</td><td><b>TRUE</b></td></tr>
					<tr><td>TRUE</td><td>FALSE</td><td>FALSE</td></tr>
					<tr><td>FALSE</td><td>TRUE</td><td>FALSE</td></tr>
					<tr><td>FALSE</td><td>FALSE</td><td>FALSE</td></tr>
				</tr>
			</table>
		</p>

		<p>
				<b>ИЛИ</b><span class="spanWarning">||</span>
		</p>
		<p>
			<table border="1px">
				<tr>
					<th>
						A
					</th>
					<th>
						B
					</th>
					<th>
						A <span class="spanWarning">|| </span> B
					</th>
					<tr><td>TRUE</td><td>TRUE</td><td><b>TRUE</b></td></tr>
					<tr><td>TRUE</td><td>FALSE</td><td><b>TRUE</b></td></tr>
					<tr><td>FALSE</td><td>TRUE</td><td><b>TRUE</b></td></tr>
					<tr><td>FALSE</td><td>FALSE</td><td>FALSE</td></tr>
				</tr>
			</table>
		</p>
	</div>
	<div class="row">
		<h1>
			Отрицание
		</h1>
		<p>
			Наряду с конъюнкцией (И) и дизъюнкцией (ИЛИ), часто используется операция "отрицание". Отрицание меняет логическое значение на противоположное. В программировании ему соответствует унарный оператор <span class="spanWarning">!</span>. Если есть функция, проверяющая четность числа, то с помощью отрицания можно выполнить проверку нечетности. По логике, если поставить двойное отрицание, то это будет подобно отсутствию отрицания вообще.   
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>function isEven($number) {</span><br>
			<span>&nbsp;&nbsp;return $number % 2 === 0;</span><br>
			<span>}</span><br>
			<span>!isEven(10); // false</span><br>
			<span>!isEven(5); // true</span><br>
			<span>!!isEven(10); // true</span><br>
		</div>
		<p>
			То есть просто слева от вызова функции добавляется <span class="spanWarning">! </span> и получается обратное действие. Отрицание - мощный инструмент, который позволяет лаконично выражать задуманные правила в коде без необходимости написания новых функций.
		</p>
	</div>
	<div class="row">
	<p>
		Напомним, что PHP - это язык со <b>слабой типизацией</b>. Он знает о существовании разных типов данных (числа, строки и пр.), но относится к их использовани. не очень строго, пытаясь преобразовывать информацию, когда это кажется разумным. Особенно много автоматических преобразований происходит в работе с логическими операциями. В PHP есть два простых правила, по которым происходят преобразования:
	</p>
		<ul>
			<li>
				<span class="spanWarning">0</span>, <span class="spanWarning">''</span>(пустая строка), <span class="spanWarning">null</span> приводится к <span class="spanWarning">false</span>;
			</li>
			<li>
				Все остальное возвращает <span class="spanWarning">true</span>.
			</li>
		</ul>
	<p>
		Это работает и в другую сторону: <span class="spanWarning">true</span> и <span class="spanWarning">false</span> преобразовываются в другие типы данных, в зависимости от ситуации: 
	</p>
	<div>
		<span>&lt;?php</span><br>
		<span>print_r(<b>true</b>); // => 1</span><br>
		<span>print_r(<b>false</b>); // => (на экран выведется пустая строка)</span><br>
		<span>print_r(0 <b>||</b> 1); // => 1</span><br>
	</div>
	<p>
		Оператор <b>ИЛИ</b> работает только с типом <i>bool</i>, но ему даны числа <span class="spanWarning">1</span> или <span class="spanWarning">0</span>.
		<ol>
			<li>
				<span class="spanWarning">0</span> преобразуется в <span class="spanWarning">false</span>, а <span class="spanWarning">1</span> преобразуется в <span class="spanWarning">true</span>
			</li>
			<li>
				Результат <span class="spanWarning">false || true </span> - это <span class="spanWarning">true</span>
			</li>
			<li>
				Теперь <span class="spanWarning">print_r</span> получает <span class="spanWarning">true</span>, но он работает со строками (не с <i>bool</i>)
			</li>
			<li>
				<span class="spanWarning">true</span> преобразуется в <span class="spanWarning">1</span>.
			</li>
			<li>
				И на экран выводится <span class="spanWarning">1</span>.
			</li>
		</ol>
	</p>
	<p>
		Здесь важно отметить также отличие операторов <span class="spanWarning">==</span> и <span class="spanWarning">!=</span>. Оно как раз заключается в преобразовании типов. Пустая строка и <span class="spanWarning">false </span> - это разные значения, поэтому оператор <span class="spanWarning"> === </span> говорит "ложь! Они не равны". Но оператор <span class="spanWarning">==</span> преобразует типы, и с его точки зрения пустая строка и <span class="spanWarning">false </span> равны. Это преобразования неявное, поэтому, по возможности, лучше избегать операторов <span class="spanWarning">==</span> и <span class="spanWarning">!=</span>. Например:
	</p>
	<div>
		<span>&lt;?php</span><br>
		<span>var_dump("" == false); // => true</span><br>
		<span>var_dump("" === false);; // => false</span><br>
	</div>
	<p>
		Вспоминая операцию отрицания, при двойном отрицании <span class="spanWarning">!!!</span> итоговое значение равно начальному:
	</p>
	<div>
		<span>&lt;?php</span><br>
		<span>$reply = true;</span><br>
		<span>var_dump(!!$reply); // => true</span><br>
		<span>var_dump(!$reply); // => false</span><br>
	</div>
	<p>
		Здесь также дополнительно происходят преобразования типа. Поэтому результатом двойного отрицания всегда будет <i>bool</i>. Этим приемом пользуются, чтобы поменять тип данных. <br>
		В разных языках программирование разные преобразования. Некоторые языки вообще не преобразовывают тип сами. Многие особенности PHP откровенно не самые удачные, но это - историческое наследие языка. Если бы его сделали сегодня с нуля, то многие правила и нюансы наверняка были бы другими.
	</p>
	</div>
<hr>
	<div class="row">
		<p>
			Реализовать функцию isLeapYear(), которая приверяет год на высокосность. Год будет высокосным, если он кратен 400, или он одновременно кратен 4 и не кратен 100. Как видно, в определении уже заложена все необходимая логика, осталось только переложить ее в код:
		</p>
		<p>
			<?php

				function isLeapYear($year){
					$result = ($year % 400 === 0) || ($year % 4 === 0 && $year % 100 !== 0); 

					return $result ;
				}

				var_dump (isLeapYear(2028));
			?>
		</p>
	</div>
<a href="./lesson25.php"> Далее </a>
</div>
</body>
</html>