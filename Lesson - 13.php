<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Задачи на приёмы работы с логическими значениями</title>
	<meta charset="utf-8">
</head>
<body>

<?php

	// Объявляем функцию "func", в которой "$a" и "$b" - это параметры, после чего в теле функции возвращаем арифметическую операцию равенства этих 2-х переменных (СПОСОБ АВТОРА):
	function func($a, $b)
 	{
		return $a == $b;
	}
	
	// Объявляем функцию "expression", в которой "$x" и "$y" - это параметры, после чего в теле функции объявляем условие (сумма параметров больше числового значения "10") по конструкции "if-else", в теле которого мы возвращаем булевское значение "true" (если наше условие выполняется), иначе - булевское значение "false", после чего проверочный пример с параметрами "7" и "5" (МОЙ СПОСОБ):
	function expression($x, $y) {
		if ($x+$y > 10) {
			return true;
		} else {
			return false;
		}
	}
	echo expression(7, 5);
	
	// - (СПОСОБ АВТОРА):
	function func($a, $b)
 	{
		return $a + $b > 10;
	}
	
	// Объявляем функцию "num", в которой "$x" - это параметр, после чего в теле функции объявляем условие (значение переменной "$x" меньше числового значения "0") по конструкции "if-else", в теле которого мы возвращаем булевское значение "true" (если наше условие выполняется), иначе - булевское значение "false", после чего проверочный пример с параметром "-3" (МОЙ СПОСОБ):
	function num($x) {
		if ($x < 0) {
			return true;
		} else {
			return false;
		}
	}
	echo num(-3);
	
	// - (СПОСОБ АВТОРА):
	function func($num) 
	{
		return $num < 0;
	}
	
</body>
</html>