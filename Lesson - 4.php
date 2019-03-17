<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Задачи на циклы foreach, while, for в PHP</title>
	<meta charset="utf-8">
</head>
<body>

<?php

	// объявляем переменную "$arr", в которую записываем строковый массив "['html', 'css', 'php', 'js', 'jq']", после чего проходим по данному массиву циклом "foreach" и выводим в браузер (в столбик) значение каждого элемента массива:
	$arr = ['html', 'css', 'php', 'js', 'jq'];
	foreach ($arr as $elem) {
		echo $elem.'<br>';
	}
	
	// объявляем переменные "$arr" и "$result", в которые записываем числовой массив "[1, 2, 3, 4, 5]" и числовое значение "0" соответственно, после чего проходим по массиву циклом "foreach" и выводим в браузер сумму всех элементов массива:
	$arr = [1, 2, 3, 4, 5];
	$result = 0;
	foreach ($arr as $elem) {
		$result += $elem;
	}
	echo $result;
	
	// объявляем переменные "$arr" и "$result", в которые записываем числовой массив "[1, 2, 3, 4, 5]" и числовое значение "0" соответственно, после чего проходим по массиву циклом "foreach" и выводим в браузер сумму квадратов всех элементов массива:
	$arr = [1, 2, 3, 4, 5];
	$result = 0;
	foreach ($arr as $elem) {
		$result += $elem * $elem;
	}
	echo $result;
	
	// объявляем переменную "$arr", в которую записываем ассоциативный массив "['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой']", после чего проходим по массиву циклом "foreach" и выводим в браузер (в столбик) строки, содержащие все ключи и значения массива:
	$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
	foreach ($arr as $key=>$elem) {
		echo $key.' - '.$elem.'<br>';
	}
	
	// объявляем переменную "$arr", в которую записываем ассоциативный массив "['Коля'=>'200', 'Вася'=>'300','Петя'=>'400']", после чего проходим по массиву циклом "foreach" и выводим в браузер (в столбик) строки, содержащие все ключи и значения массива:
	$arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
	foreach ($arr as $key=>$elem) {
		echo $key.' - зарплата '.$elem.' долларов<br>';
	}
	
	// объявляем переменную "$i", в которую записываем числовое значение "1", после чего проходим циклом "while" и выводим в браузер (в столбик) числа от 1-го до 100-а в порядке возрастания (на 1 единицу в каждой итерации), добавив в тело цикла инкремент(метод с "WHILE"):
	$i = 1;
	while ($i <= 100) {
		echo $i.'<br>';
		$i++;
	}
	
	// - (метод с "FOR"):
	for ($i = 1; $i <= 100; $i++) {
		echo $i.'<br>';
	}
	
	// объявляем переменную "$i", в которую записываем числовое значение "11", после чего проходим циклом "while" и выводим в браузер (в столбик) числа от 11-и до 33-х в порядке возрастания (на 1 единицу в каждой итерации), добавив в тело цикла инкремент(метод с "WHILE"):
	$i = 11;
	while ($i <= 33) {
		echo $i.'<br>';
		$i++;
	}
	
	// - (метод с "FOR"):
	for ($i = 11; $i <= 33; $i++) {
		echo $i.'<br>';
	}
	
	// объявляем переменную "$i", в которую записываем числовое значение "0", после чего проходим циклом "while" и выводим в браузер (в столбик) числа от 0-я до 100-а в порядке возрастания (на 2 единицы в каждой итерации), добавив в тело цикла инкремент(метод с "WHILE"):
	$i = 0;
	while ($i <= 100) {
		echo $i.'<br>';
		$i += 2;
	}
	
	// - (метод с "FOR"):
	for ($i = 0; $i <= 100; $i += 2) {
		echo $i.'<br>';
	}
	
	// объявляем переменные "$sum" и "$i", в которые записываем числовые значения "0" и "1" соответственно, после чего проходим циклом "while" и выводим в браузер (в столбик) числа от 0-я до 100-а в порядке возрастания (на 1 единицу в каждой итерации), добавив в тело цикла инкремент(метод с "WHILE"):
	$sum = 0;
	$i = 1;
	while ($i <= 100) {
		$sum += $i;
		$i++;
	}
	
	// - (метод с "FOR"):
	$sum = 0;
	for ($i = 1; $i <= 100; $i++) {
		$sum += $i;
	}
	
	// объявляем переменную "$arr", в которую записываем числовой массив "[2, 5, 9, 15, 0, 4]", после чего проходим по массиву циклом "foreach", в теле которого объявляем условие по конструкции "if-else", в котором, если числовое значение новой объявленной переменной "$elem" больше числа "3" И меньше числа "10", то выводим в браузер (в столбик) элементы массива в соответствии с условием:
	$arr = [2, 5, 9, 15, 0, 4];
	foreach ($arr as $elem) {
		if ($elem > 3 && $elem < 10) {
			echo $elem.'<br>';
		}
	}
	
	// объявляем переменные "$sum" и "$arr", в которые записываем числовое значение "0" и числовой массив "[2, -5, -9, 15, 11, -4]" соответственно, после чего проходим по массиву циклом "foreach", в теле которого объявляем условие по конструкции "if-else", в котором, если числовое значение новой объявленной переменной "$elem" больше числа "0", то к переменной "$sum" прибавляем каждый элемент массива (положительный в данном случае):
	$sum = 0;
	$arr = [2, -5, -9, 15, 11, -4];
	foreach ($arr as $elem) {
		if ($elem > 0) {
			$sum += $elem;
		}
	}
	
	// объявляем переменную "$arr", в которую записываем числовой массив "[1, 2, 5, 9, 4, 13, 4, 10]", после чего проходим по массиву циклом "foreach", в теле которого объявляем условие по конструкции "if-else", в котором, если числовое значение новой объявленной переменной "$v" соответствует числовому значению "4", то в браузер выводим строку "Есть!" и обрываем проходы по циклу:
	$arr = [1, 2, 5, 9, 4, 13, 4, 10];
	foreach ($arr as $v) {
		if ($v == 4) {
			echo "Есть!";
			break;
		}
	}
	
	// объявляем переменную "$arr", в которую записываем строковый массив, содержащий числа "['10', '20', '30', '50', '235', '3000']", после чего проходим по массиву циклом "foreach", в теле которого объявляем условие по конструкции "if-else", в котором, если 1-й символ числового значения новой объявленной переменной "$v" соответствует числам "1" ИЛИ "2" ИЛИ "5", то эти значения выводим в браузер:
	$arr = ['10', '20', '30', '50', '235', '3000'];
	foreach ($arr as $v) {
		if ($v[0] == '1' || $v[0] == '2' || $v[0] == '5') {
			echo "$v<br>";
		}
	}
	
	// объявляем переменную "$arr", в которую записываем числовой массив "[1, 2, 3, 4, 5, 6, 7, 8, 9]", после чего проходим по массиву циклом "foreach" и выводим в браузер все элементы массива со знаком "-" слева(МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach ($arr as $v) {
		echo "-$v";
	}
	echo "-";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$str = '';
	foreach ($arr as $elem) {
		$str .= '-'.$elem;
	}
	echo $str.'-';
	
	// объявляем переменную "$arr", в которую записываем строковый массив "['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс']", после чего проходим по массиву циклом "foreach", в теле которого объявляем условие по конструкции "if-else", в котором, если ключ массива соответствует числовому значению "5" ИЛИ "6", то выводим в браузер все элементы массива под этими ключами с жирным шрифтом, а остальные - обычным(МОЙ СПОСОБ):
	$arr = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
	foreach ($arr as $k => $v) {
		if ($k == 5 || $k == 6) {
			echo "<b>$v</b><br>";
		} else {
			echo "$v<br>";
		}
	}
	
	// - (СПОСОБ АВТОРА):
	$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	foreach ($arr as $key=>$elem) {
		if ($key == 5 or $key == 6) {
			echo '<b>'.$elem.'</b><br>';
		} else {
			echo $elem.'<br>';
		}
	}
	
	// объявляем переменные "$arr" и "$day", в которые записываем строковый массив "['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс']" и числовое значение "6" (так как сегодня Воскресенье), после чего проходим по массиву циклом "foreach", в теле которого объявляем условие по конструкции "if-else", в котором, если ключ массива соответствует тому же числовому значению, что и переменная "$day", то значение элемента массива с данным ключом выводим в браузер курсивом, а остальные - обычным шрифтом(МОЙ СПОСОБ):
	$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	$day = 6;
	foreach ($arr as $k => $v) {
		if ($k == $day) {
			echo "<i>$v</i><br>";
		} else {
			echo "$v<br>";
		}
	}
	
	// - (СПОСОБ АВТОРА):
	$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	$day = 2; //пусть сегодня второй день
	foreach ($arr as $key=>$elem) {
		if ($key == $day) {
			echo '<i>'.$elem.'</i><br>';
		} else {
			echo $elem.'<br>';
		}
	}
	
	// объявляем переменную "$arr", в которую записываем пустой массив "[]", после чего проходим по массиву циклом "for", в теле которого присваиваем пустому массиву значение, соответствующее счётчику нашего массива (тем самым заполняя пустой массив итерациями), после чего выводим уже заполненный массив с помощью встроенной функции "print_r()"(МОЙ СПОСОБ):
	$arr = [];
	for ($i=1; $i<=100; $i++) {
		$arr[] = $i; 
	}
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [];
	for ($i = 1; $i <= 100; $i++) {
		$arr[] = $i;
	}
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем массив "['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой']", после чего проходим по массиву циклом "foreach", в теле которого объявляем переменные "$en[]" и "$ru[]", присваиваем им значения, соответствующие значениям переменных "$key" и "$elem" соответственно, после чего полученный результат выводим в браузер с помощью встроенной функции "var_dump()"(СПОСОБ АВТОРА):
	$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
	foreach ($arr as $key=>$elem) {
		$en[] = $key;
		$ru[] = $elem;
	}
	var_dump($en);
	var_dump($ru);
	
	// объявляем переменные "$num" и "$i", в которые записываем числовые значения "1000" и "0" соответственно, после чего проходим циклом "while" с условием, что значение переменной "$num" больше числа "50", в теле которого объявляем другую переменную "$num", которая на каждой итерации цикла делит прежнюю переменную "$num" на число "2", а также ранее объявленную переменную "$num" с инкрементом для подсчёта количества итераций, после чего полученные результаты выводим в браузер (СПОСОБ АВТОРА - WHILE):
	$num = 1000;
	$i = 0;
	while ($num > 50) {
		$num /= 2;
		$i++;
	}
	echo $i.'<br>'; //кол-во итераций
	echo $num; //число, которое получилось
	
	// - (СПОСОБ АВТОРА - FOR):
	//Это цикл без тела {}, все происходит внутри:
	for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);
	echo $i.'<br>'; //кол-во итераций
	echo $num; //число, которое получилось
	
?>

</body>
</html>