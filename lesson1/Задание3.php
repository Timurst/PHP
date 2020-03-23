<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GeekBrains PHP</title>
</head>
<body>

<div class="content">

	<?php

	$a = 5;
	$b = '05';

	var_dump($a == $b); // Почему true?
	/* Ответ: Каждая строка будет преобразована в число. Значение переменной $b будет преобразовано число, начальный ноль игнорируется,
	5 = 5, что является правдой (true). */

	echo '<br>';

	var_dump((int)'012345'); // Почему 12345?
	// Ответ: Строка была приведена к типу integer, то есть числу, а начальные нули игнорируются, отсекаются.

	echo '<br>';

	var_dump((float)123.0 === (int)123.0); // Почему false?
	// Ответ: "===" - Сравнение по значению и типу. Тип float не равен типу integer, хотя значения равны.

	echo '<br>';

	var_dump((int)0 === (int)'hello, world'); // Почему true?
	// Ответ: Оба значения равны 0 = 0 + одинаковые типы данных, следовательно 'true'.
	?>
</div>
<div class="footer">
	Copyright &copy; <?php echo date ("Y");?> Timur Timerbulatov
<div>


</body>
</html>