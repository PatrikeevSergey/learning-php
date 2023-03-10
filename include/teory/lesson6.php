<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<h1>
			Строки.
		</h1>
	</div>
	<div>
		<span class="spanWarning">
			<p class = 'dLine'>'Hello'</p>
			<p class = 'dLine'>'Goodbye'</p>
			<br>
			<p class = 'dLine'>'G'</p>
			<p class = 'dLine'>' '</p>
			<p class = 'dLine'>''</p>
		</span>
	</div>
	<div>
		<p>
			Какие из этих вариантов - строки?<br>
			Любой одиночный символ в кавычках - это строка. Пустая строка <span class="spanWarning">' '</span> - это тоже строка. То есть строкой мы считаем все, что находится внутри кавычек, даже если это пробел, один символ или вообще отсутствие символов. <br> 
			Ранее в уроках мы записывали строки в одинарных ковычках, но это не единственный способ. Можно использовать и двойные:
		</p>
	</div>
	<div>
			<span>&lt;?php</span><br>
			<span>print_r("Hello!");</span>
	</div>
	<div>
		<p>
			Но представте, что есть задача вывести на экран строку Dragon's mother. Апостроф перед буквой <b>s</b> - это тоже символ, как одинарная ковычка. Если запустить код, PHP выдаст ошибку. 
		</p>
	</div>
		<div>
			<span>&lt;?php</span><br>
			<span>print_r('Dragon's mother');</span><br>
			<span class="spanWarning">//Parse error: syntax error, unexpected identifier "s", expecting ")" </span>
		</div>
	<div>
		<p>
			Такая программа работать не будет. С точки зрения PHP строка началась с одинарной кавычки, а потом закончилась после буквы <b>n</b>. Дальше были символы <span class="spanWarning">s mother</span> без ковычек - это значит не строка. А потом была одна открывающая строку ковычка, которая и не закрылась <span class="spanWarning">');</span>. Этот код синтаксически некорретен (это видно даже ппо тому, как подсвечен код).<br>
			Здесь помогают двойные ковычки. Такой вариант программы отработает корректно:	
		</p>
	</div>
	<div>
			<span>&lt;?php</span><br>
			<span>print_r("Dragon's mother");</span>
	</div>
	<div>
		<p>
			Теперь интерпретатор знает, что строка началась с двойной кавычки и значит ей завершится. А одинарная кавычка внетри стала часть строки. Верно и обратное. Если внутри строки необходимо использовать двойные кавычки, то саму строку надо делать в одинарных. Причем количество кавычек внутри самой строки не важно.<br>
			Теперь есть задача вывести вот такую строку: <br>
			Dragon's mother said "No"
		</p>
		<p>
			В ней есть и одинарные и двойные кавычки. В подобной ситуации нужно указать интерпретатору считать кавычку частью строки, а не началом или концом. <br>
			Для этого <b>экранируют</b> специальные символы. В нашем случаеэто символ, который является признаком начала и конца строки, - либо одинарная кавычка, либо двойная, в зависимости от ситуации. Для экранирования используется обратный слеш <span class="spanWarning">\</span>.
		</p>
		<div>
			<span>&lt;?php</span><br>
			<span>// Экранируется только ", т.к. в этой ситуации</span><br>
			<span>// двойные кавычки имеют специальное значение</span><br>
			<span>print_r("Dragon's mother said \"No\"");</span><br>
			<span>// Dragon's mother said "No"</span><br>
	</div>
	</div>
	<div>
		<p>
			Посмотрите внимательно: нам нужно было добавить <span class="spanWarning">\</span> для двойных кавычек, но не для одинарной (апостраф), потому что сама строка задана с двойной кавычке. Если бы строка задавалась с одинарной кавычке, то символ экранирования нужен был бы перед апострофом, но не перед двойными кавычками.
		</p>
	</div>
	<div>
		<p>
			Для того, чтобы вывести обратный слеш, его надо экранировать самим собой.
		</p>
	</div>
	<div>
			<span>&lt;?php</span><br>
			<span>print_r("\\");</span><br>
			<span>// => \</span>
	</div>
	<div>
		<h1>
			Экранирующие последовательности
		</h1>
		<p>
			Иногда нужно расположить несколько строк друг за другом. Для этого нужно как-то сказать интерпретатору "нажать на enter" - сделать этот перевод строки. Это можно сделать, используя символ перевода строки: <span class="spanWarning">\n</span>.
		</p>

			<div>
			<span>&lt;?php</span><br>
			<span>print_r("- Как твои дела?\n- Хорошо!"</span>
			<p>
				Результат:
			</p>
			<span>- Как твои дела?</span><br>
			<span>- Хорошо!</span>

			<p>
				<span class="spanWarning">\n </span> - специальный символ. А литературе его обозначают как <i>LF</i> (line freed). Возможно подумали, что это опечатка, ведь здесь мы видим два символа <span class="spanWarning">\</span> и <span class="spanWarning">n</span>, но это не так. С точки зрения компьютера - это один невидимый символ перевода строки. 
			</p>
			<p>
				Почему так сделано? <span class="spanWarning">\n</span> - всего лишь способ записывать символ для перевода строки, но там перевод строки по своему смыслу - это один символ, правда, невидимый. Именно поэтому возникла такая задача. Нужно было как-то прдставить его на клавиатуре. А поскольку количество знаков на ней ограничего и отдано под самое важное, то все специальные символы реализуются в виде таких обозначений. <br>
				Символ перевода строки не является чет-то специфическим для программирования. Во многих редакторах есть опция, позволяющая включить отображение невидимых символов - с ее помощью можно понять, где она находится (хотя это всего лишь схематичное отображение, у этих символов нет грачического представления, они невидимые).
			</p>
			<p>
				<span class="spanWarning">\n</span> - это пример <b>экранирующей последовательности</b>. Их езе называют управляющими конструкциями. Хотя таких символов не один десяток, в программировании части встречаются всего несколько. Кроме перевода строки к ним относится табуляция (разрыв, получаемый при нажамии на кнопку Tab) и возврат коретки (только для Windows). Программистам часто нужно использовать перевод строки <span class="spanWarning">\n</span> для правильного форматирования текста
			</p>
			<p>
				<b>
					Внимание! Экранирующие последовательности вроде 
				</b>
					<span class="spanWarning">\n</span>
				<b>
					работают только внутри двойных кавычек!
				</b>
			</p>
			<p>
				Если необходимо вывести именно <span class="spanWarning">\n</span>, как текст (два отдельно печатных символа), то можно воспользоваться уже известный способ экранирования, добавив еще один <span class="spanWarning">\</span> в начале. То есть последовательность <span class="spanWarning">\\n</span> отобразится как символ <span class="spanWarning">\</span> и <span class="spanWarning">n</span>, идущие друг за другом.
			</p>
			<p>
				Небольшое, но важное замечание про Windows. В Windows для перевода строк по умолчанию используется <span class="spanWarning">\r\n</span>. Такая комбинация хорошо работает только в Windows, но создает проблемы при переносе в другие системы (например, когда разоаботчки работаю как в Windows, так и в Linux). Дело в том, что последовательность <span class="spanWarning">\r\n</span> имеет разную трактовку в зависимости от выбранной кодировки. При этой причине в среде разработчиков принято использовать <span class="spanWarning">\n</span> без <span class="spanWarning">\r</span>, т.к. LF всегда трактуется одинаково и отлично работает в любой системе. Не забудьте настроить редактор на использование <span class="spanWarning">\n</span>.
			</p>
			</div>
	</div>
	<div>
		<h1>
			Конкатенация 
		</h1>
		<p>
			В веб - разработке программы постоянно оперируют строками. Все, что мы видим на сайте, так или иначе представлено в виде текста. Этот текст чаще всего динамический, то есть полученный из разных частей, которые соединяются вместе. Операция соединения строк в программировании называется <b>конкатенацией</b>.<br>
			Из предыдущих уроков мы знаем о математических операциях. Такая программа выведет на экран 8 - резальтат работы бинарного оператора <span class="spanWarning">+</span> с операндами <span class="spanWarning">5</span> и <span class="spanWarning">3</span>:
			 <div>
				<span>&lt;?php</span><br>
				<span>print_r(5 + 3);</span><br>
				<span>// => 8</span>
			</div>
		</p>
		<p>
			Так же можно "сложить" две строки. Такая программа выведет на экран<span class="spanWarning"> HelloWorld </span>- резульатат бинарного оператора <span class="spanWarning">.</span> с операндами 'Hello' и 'World':
		</p>
			<div>
				<span>&lt;?php</span><br>
				<span>print_r("Hello" . "World");</span><br>
				<span>// => HelloWold</span>
			</div>
		<p>
			Склеивание строк всегда происходит в том же порядке, в котором записаны опернды. Левый операнд становится левой частью строки, а второй - правой. <br>
			Как видно из примера выше, строки можно склеить даже если они записаны с разными ковычками. <br>
			Пробел - такой же символ, как и другие, поэтому сколько пробелом поставить в строке, столько и получится в итоге.
		</p>
	</div>
</div>
</body>
</html>


