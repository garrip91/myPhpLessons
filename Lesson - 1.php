<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Задачи на основы языка PHP</title>
	<meta charset="utf-8">
</head>
<body>

<?php

	// объявляем переменную "$a", присваиваем ей значение "3" и выводим это значение в браузер:
	$a = 3;
	echo $a;
	
	// объявляем переменные "$a" и "$b", присваиваем им значения "10" и "2" соответственно, после чего выводим в браузер сумму их значений и разность:
	$a = 10;
	$b = 2;
	echo $a + $b;
	echo $a - $b;
	echo $a * $b;
	echo $a / $b;
	
	// объявляем переменные "$с" и "$d", присваиваем им значения "15" и "2" соответственно, после чего объявляем переменную "$result", которой присваиваем сумму значений этих переменных, затем выводим эту сумму в браузер:
	$c = 15;
	$d = 2;
	$result = $c + $d;
	echo $result;
	
	// объявляем переменные "$a", "$b" и "$c", присваиваем им значения "10", "2" и "5" соответственно, после чего выводим сумму этих значений в браузер:
	$a = 10;
	$b = 2;
	$c = 5;
	echo $a + $b + $c;
	
	// объявляем переменные "$a", "$b", "$c", "$d" и "$result", из которых первым 2-м присваиваем значения "17" и "10" соответственно, после чего переменной "$c" присваиваем разность значений переменных "$a" и "$b", переменной "$d" присваиваем значение "7", а переменной "$result" - сумму значений переменных "$c" и "d", после чего выводим эту сумму в браузер:
	$a = 17;
	$b = 10;
	$c = $a - $b;
	$d = 7;
	$result = $c + $d;
	echo $result;
	
	// объявляем переменную "$text", записываем в неё строку 'Привет, Мир!', после чего выводим эту строку в браузер:
	$text = 'Привет, Мир!';
	echo $text;
	
	// объявляем переменные "$text1" и "$text2", записываем в них строки 'Привет, ' и 'Мир!' соответственно, после чего выводим в браузер результат сложения этих строк(путём использования знака "."):
	$text1 = 'Привет, ';
	$text2 = 'Мир!';
	echo $text1.$text2;
	
	// объявляем переменную "$name", записываем в неё строку 'Дима', после чего выводим в браузер строку приветствия с использованием значения этой переменной:
	$name = 'Дима';
	echo 'Привет, '.$name.'!';
	
	// объявляем переменную "$age", записываем в неё число "25", после чего выводим в браузер строку с использованием значения этой переменной:
	$age = 25;
	echo 'Мне '.$age.' лет!';
	
	// объявляем переменную "$text", записываем в неё строку 'abcde', после чего выводим в браузер 1-ю, 3-ю и 5-ю буквы из этой строки(при этом мы учитываем, что любая строка - это массив):
	$text = 'abcde';
	echo $text[0]; //выведем букву 'a'
	echo $text[2]; //выведем букву 'c'
	echo $text[4]; //выведем букву 'e'
	
	// объявляем переменную "$text", записываем в неё строку 'abcde', меняем в ней 1-й символ, после чего выводим в браузер конечную строку(при этом мы не забываем о том, что любая строка - это массив):
	$text = 'abcde';
	$text[0] = '!';
	echo $text; //выведет '!bcde'
	
	// объявляем переменную "$num", записываем в неё строку (число) '12345', после чего выводим в браузер значение суммы каждой цыфры в этом числе(при этом мы не забываем о том, что любая строка - это массив):
	$num = '12345';
	echo $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
	
	// выводим в браузер сначала количество секунд в часе, затем - в сутках и, наконец, в месяце:
	echo 60 * 60; //количество секунд в часе
	echo 60 * 60 * 24; //количество секунд в сутках
	echo 60 * 60 * 24 * 31; //количество секунд в месяце
	
	// объявляем переменные "$hour", "$minute" и "$seconds", записываем в них строки (числа) '10', '43' и '43' соответственно, после чего выводим в браузер значения этих переменных в формате "--:--:--":
	$hour = '10';
	$minute = '43';
	$seconds = '43';
	echo $hour.':'.$minute.':'.$seconds;
	
	// объявляем переменную "$a", записываем в неё значение "3" и выводим в браузер это же значение, умноженное само на себя:
	$a = 3;
	echo $a * $a;
	
	// записи выражений с использованием коротких записей:
	$var = 47;
	$var += 7;
	$var -= 18;
	$var *= 10;
	$var /= 20;
	echo $var;
	
	// аналогично:
	$text = 'Я';
	$text .= ' хочу';
	$text .= ' знать';
	$text .= ' PHP!';
	echo $text;
	
	// аналогично:
	$var = 10;
	$var++;
	$var++;
	$var--;
	echo $var;
	
	// аналогично:
	$var = 10;
	$var += 7;	
	$var++;
	$var--;
	$var += 12;
	$var *= 7;
	$var -=15;
	echo $var;
	
?>

</body>
</html>