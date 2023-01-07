<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href = "../../css/style.css">
	<title></title>
</head>
<body>
<div>
	<h1>
		Линтер
	</h1>
	<p>
		Теперь, когда научились писать программы, можно поговорить о том, как их писать
	</p>
	<p>
		Код нужно оформлять определенным образом, чтобы он был достаточно понятным и простым в поддержке. Специальные наборы правил - стандарты - описывают различным аспекты написания кода. Конкретно в PHP самым распространенными являются стандарты PSR (PHP Standarts Pecommendations или стандартные рекомендации PHP) от PHP-FIG. Рекомендация представляет собой набор правил, призванных облегчить определенную сторону разработки (или решить какую-то определенную проблему.) На текущий момент существует несклько утвержденных рекомендаций, кадая из них обозначена цифрой: PSR-1, PSR-2, PSR-3 и другие. С всеми рекомендациями будем знакомиться постепенно во время обечения и работы. Сейчас остановимся на двух основных:
		<ul>
			<li>
				PSR-1: Basic Coding Standart (Базовый стандарт написания кода). Это набор правил, определяющих, как следует оформлять программый код: как писать теги PHP, по каким правилам именовать классы, методы, константы классов. Он также затравигвает вопросы кодировки, автозагрузки, пространства имен и разделения ответственности между файлами. Это базовы правила, старндарт PSR-12 их расширяет.
			</li>
			<li>
				PSR-12: Extended coding Style (Расширенный стандарт стила кодирования, заменя или дополняет устаревший PSR-2). Во-первых, это стандарт требует выполнения правил PSR-1. Во-вторых, он добавляет множество новых требований: к отступам, файлам, строкам, ключевым классам, классам, управлящими констракциями, области видимости и другие элементы.
			</li>
		</ul>
	</p>
	<p>
		В любом языке программирования существуют специальные инструменты, так называемые <b>линтеры</b>, которые проверяют код на соответствие стандартам. Повсеместно используемым линтером в PHP является <span class="link"> <a href = "https://github.com/squizlabs/PHP_CodeSniffer/"> PHP_CodeSniffer</a></span> 
	</p>
	<div>
			<span>&lt;?php</span><br>
			<span>//в коде отступ равен одному табу</span><br>
			<span>print_r (((8 / 2) + 5) - (-3 / 2));</span>
	</div>
	<p>
	    При проверке файла линтер найдет следующие ошибки:
	<ul>


    	<li>
    		<span class="spanWarning"> Spaces must be used to indent lines; tabs are not allowed</span> — PSR-12 рекомендует делать отступ размером в четыре пробела, а в примере выше использована табуляция; 
    	</li>
    	<li>
    		<span class="spanWarning"> A closing tag is not permitted at the end of a PHP file</span> — стандарт содержит требование опускать завершающий тег ?> 
    	</li>
    	<li>
    		<span class="spanWarning">Space before opening parenthesis of function call prohibited</span> — при вызове функции между именем функции и круглыми скобками не должно быть пробельных символов, а в проверяемом коде после имени print_r стоит один пробел
    	</li>

    </ul>
	</p>
	<p>
		Исправим код, убрав закрывающий тег, отступы и пробел после имени функции:
		Этот вариант уже не нарушает правил, и линтер будет «молчать».
		Не «пугайтесь» обилию рекомендаций и правил. Большинство правил просты и понятны. Скорее всего, вы и так будете интуитивно придерживаться их в коде. С остальными вам помогут справиться время, опыт и линтер.
	</p>
</div>
<a href="./lesson6.php"> Далее </a>
</body>
</html>