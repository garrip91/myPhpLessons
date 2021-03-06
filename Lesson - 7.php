<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Задачи на функции работы с массивами в PHP</title>
	<meta charset="utf-8">
</head>
<body>

<?php

	// объявляем переменную "$arr", в которую записываем произвольный числовой массив, после чего, используя встроенную функцию "count()" (подсчёта элементов массива), выводим в браузер кол-во элементов массива (МОЙ СПОСОБ (АНАЛОГИЧЕН СПОСОБУ АВТОРА)):
	$arr = [1, 2, 3, 4, 5];
	echo count($arr);
	
	// объявляем переменные "$arr" и "$q", в которые записываем произвольный числовой массив и результат применения встроенной функции "count()" к нашему массиву соответственно, после чего выводим в браузер последний элемент массива, записав переменную массива с индексом "кол-во элементов - 1" (МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5];
	$q = count($arr);
	echo $arr[$q - 1];
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	echo $arr[count($arr) - 1]; //последний элемент массива
	
	// объявляем переменную "$arr", в которую записываем произвольный числовой массив и, используя теги "<pre></pre>", а также встроенные функции "print_r()" и "in_array()" (наличия заданного элемента в массиве), выводим в браузер результат наличия/отсутствия в массиве искомого элемента (МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5];
	echo "<pre>";
	print_r(in_array(3, $arr));
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	var_dump(in_array(3, $arr));
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив и, используя встроенную функцию "array_sum()" (суммы числовых элементов массива), выводим в браузер сумму всех элементов массива (МОЙ СПОСОБ (АНАЛОГИЧЕН СПОСОБУ АВТОРА)):
	$arr = [1, 2, 3, 4, 5];
	echo array_sum($arr);
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив и, используя встроенную функцию "array_product()" (произведения числовых элементов массива), выводим в браузер сумму всех элементов массива (МОЙ СПОСОБ (АНАЛОГИЧЕН СПОСОБУ АВТОРА)):
	$arr = [1, 2, 3, 4, 5];
	echo array_product($arr);
	
	// объявляем переменную "$arr", в которую записываем произвольный числовой массив и, используя встроенные функции "array_sum()" (суммы числовых элементов массива) и "count()" (подсчёта элементов массива), выводим в браузер результат деления сумму всех элементов массива на их кол-во (МОЙ СПОСОБ (АНАЛОГИЧЕН СПОСОБУ АВТОРА)):
	$arr = [1, 2, 3, 4, 5];
	echo array_sum($arr) / count($arr);
	
	// объявляем переменную "$arr", в которую записываем встроенную функцию "range()" (заполнения массива элементами в порядке возрастания/убывания либо в другом (например, алфавитном) порядке) с числовыми параметрами "1" и "100", после чего выводим в браузер массив, заполненный числами от 1 до 100 (МОЙ СПОСОБ):
	$arr = range(1, 100);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = range(1, 100);
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем встроенную функцию "range()" (заполнения массива элементами в порядке возрастания/убывания либо в другом (например, алфавитном) порядке) со строковыми параметрами "a" и "z", после чего выводим в браузер массив, заполненный буквами от "a" до "z" (в алфавитном порядке) (МОЙ СПОСОБ):
	$arr = range("a", "z");
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = range('a', 'z');
	var_dump($arr);
	
	// объявляем переменные "$arr" и "$str", в которые записываем встроенную функцию "range()" (заполнения массива элементами в порядке возрастания/убывания либо в другом (например, алфавитном) порядке) с числовыми параметрами "1" и "9" и встроенную функцию "implode()" (преобразования массива в строку) с параметрами разделитель и переменная (массив) соответственно, после чего выводим в браузер полученную строку (МОЙ СПОСОБ):
	$arr = range(1, 9);
	$str = implode('-', $arr);
	echo $str;
	
	// - (СПОСОБ АВТОРА):
	echo implode('-', range(1, 9));
	
	// объявляем переменную "$arr", в которую записываем встроенную функцию "range()" (заполнения массива элементами в порядке возрастания/убывания либо в другом (например, алфавитном) порядке) с числовыми параметрами "1" и "100", после чего выводим в браузер сумму элементов полученного массива, используя встроенную функцию "array_sum()" (суммы числовых элементов масива) (МОЙ СПОСОБ):
	$arr = range(1, 100);
	echo array_sum($arr);
	
	// - (СПОСОБ АВТОРА):
	echo array_sum(range(1, 100));
	
	// объявляем переменную "$arr", в которую записываем встроенную функцию "range()" (заполнения массива элементами в порядке возрастания/убывания либо в другом (например, алфавитном) порядке) с числовыми параметрами "1" и "10", после чего выводим в браузер сумму элементов полученного массива, используя встроенную функцию "array_product()" (произведения числовых элементов массива) (МОЙ СПОСОБ):
	$arr = range(1, 10);
	echo array_product($arr);
	
	// - (СПОСОБ АВТОРА):
	echo array_product(range(1, 10));
	
	// объявляем переменные "$arr1", "$arr2" и "$arr3", в 1-е 2 из которых записываем заявленные числовой и строковый массивы, а в 3-ю - результат применения встроенной функции "array_merge()" (слияния 2-х и более массивов) с параметрами в виде наших массивов, после чего выводим в браузер конечный массив (МОЙ СПОСОБ):
	$arr1 = [1, 2, 3];
	$arr2 = ['a', 'b', 'c'];
	$arr3 = array_merge($arr1, $arr2);
	echo "<pre>";
	print_r($arr3);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr1 = [1, 2, 3];
	$arr2 = ['a', 'b', 'c'];
	$result = array_merge($arr1, $arr2);
	var_dump($result);
	
	// объявляем переменные "$arr" и "$result", в 1-ю из которых записываем заявленный числовой массив, а во 2-ю - результат применения встроенной функции "array_slice()" (разрезания массива c сохранением исходного) с параметрами в виде нашего массива, индекса числового значения "2" (то есть, "1") и кол-ва вырезаемых чисел (то есть, "3"), после чего выводим полученный результат в браузер (МОЙ СПОСОБ): 
	$arr = [1, 2, 3, 4, 5];
	$result = array_slice($arr, 1, 3);
	echo "<pre>";
	print_r($result);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	$result = array_slice($arr, 1, 3);
	var_dump($result);
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив, после чего применяем встроенную функцию "array_splice()" (разрезания массива с изменением исходного) с параметрами в виде нашего массива, индекса числового значения "2" (то есть, "1") и кол-ва вырезаемых чисел (то есть, "2"), и выводим полученный результат в браузер (МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 1, 2);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 1, 2);
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив, после чего применяем встроенную функцию "array_splice()" (разрезания массива с изменением исходного) с параметрами в виде нашего массива, индекса первого числа, которое в нашем случае последует за всеми числами текущего массива (в данном случае это "5"), кол-ва вырезаемых чисел (то есть, "0"), подмассива, который нам необходимо добавить, и выводим полученный результат в браузер (МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 5, 0, [2, 3, 4]);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	$result = array_splice($arr, 1, 3);
	var_dump($result);
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив, после чего применяем встроенную функцию "array_splice()" (разрезания массива с изменением исходного) с параметрами в виде нашего массива, индекса первого числа, которое в нашем случае последует за числом "3", кол-ва вырезаемых чисел (то есть, "0"), подмассива, который нам необходимо добавить, и выводим полученный результат в браузер (МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 3, 0, ['a', 'b', 'c']);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 3, 0, ['a', 'b', 'c']);
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив, после чего трижды применяем встроенную функцию "array_splice()" (разрезания массива с изменением исходного) с параметрами в виде нашего массива, нужного на каждом этапе индекса, кол-ва вырезаемых чисел (то есть, "0"), а также подмассивов, которые нам необходимо добавить на каждом из 3-х этапов, и выводим полученный результат в браузер (МОЙ СПОСОБ (АНАЛОГИЧНЫЙ СПОСОБУ АВТОРА)):
	$arr = [1, 2, 3, 4, 5];
	array_splice($arr, 1, 0, ['a', 'b']); // [1, 'a', 'b', 2, 3, 4, 5]
	array_splice($arr, 6, 0, ['с']); // [1, 'a', 'b', 2, 3, 4, 'c', 5]
	array_splice($arr, 8, 0, ['e']);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// объявляем переменные "$arr", "$keys" и "$values", в которые записываем заявленный ассоциативный массив и встроенные функции "array_keys()" (извлечения ключей массива) и "array_values()" (извлечения значений массива) соответственно (с единственным аргументом "$arr"), после чего выводим в браузер сначала ключи исходного массива (в виде отдельного массива), затем значения этих ключей (также в виде отдельного массива) (МОЙ СПОСОБ):
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	$keys = array_keys($arr);
	$values = array_values($arr);
	echo "<pre>";
	print_r($keys);
	echo "</pre>";
	echo "<pre>";
	print_r($values);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	$keys = array_keys($arr);
	$values = array_values($arr);
	var_dump($keys);
	var_dump($value);
	
	// объявляем переменные "$arr1", "$arr2" и "$arr3", в первые 2 из которых записываем заявленные строковый и числовой массивы, а в третий - встроенную функцию "array_combine()" (слияния 2-х массивов в 1 в виде "ключ - значение", где 1-й из исходных массивов - ключ, а 2-й - значение), параметрами в которой являются наши исходные массивы, после чего выводим в браузер конечный массив (МОЙ СПОСОБ):
	$arr1 = ['a', 'b', 'c'];
	$arr2 = [1, 2, 3];
	$arr3 = array_combine($arr1, $arr2);
	echo "<pre>";
	print_r($arr3);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$keys = ['a', 'b', 'c'];
	$values = [1, 2, 3];
	var_dump(array_combine($keys, $values));
	
	// объявляем переменные "$arr1" и "$arr2", в первый из которых записываем заявленный ассоциативный массив, а во второй - встроенную функцию "array_flip()" (обмена местами ключей и значений), параметром в которой является наш исходный массив, после чего выводим в браузер конечный массив (МОЙ СПОСОБ):
	$arr1 = ['a'=>1, 'b'=>2, 'c'=>3];
	$arr2 = array_flip($arr1);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	var_dump(array_flip($arr));
	
	// объявляем переменные "$arr1" и "$arr2", в первый из которых записываем заявленный числовой массив, а во второй - встроенную функцию "array_reverse()" (обратного порядка), параметром в которой является наш исходный массив, после чего выводим в браузер конечный массив (МОЙ СПОСОБ):
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = array_reverse($arr1);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	$arr = array_reverse($arr);
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем заявленный строковый массив, после чего, используя встроенную функцию "array_search()" (поиска элемента в массиве и возврата его первого вхождения), выводим в браузер индексный номер первого вхождения искомого элемента (МОЙ СПОСОБ (АНАЛОГИЧЕН СПОСОБУ АВТОРА)):
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
	echo array_search('-', $arr);
	
	// объявляем переменные "$arr" и "$pos", в 1-ю из которых записываем заявленный строковый массив, а во 2-й - встроенную функцию "array_search()", после чего используем встроенную функцию "array_splice()", а затем выводим в браузер конечный массив (без вырезанного символа) (МОЙ СПОСОБ):
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
	$pos = array_search('-', $arr);
	array_splice($arr, $pos, 1);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
	$pos = array_search('-', $arr);
	array_splice($arr, $pos, 1);
	var_dump($arr);
	
	// объявляем переменные "$arr1" и "$arr2", в 1-ю из которых записываем заявленный строковый массив, а во 2-й - встроенную функцию "array_replace()" (замены элементов массива), после чего выводим в браузер конечный массив (МОЙ СПОСОБ):
	$arr1 = ['a', 'b', 'c', 'd', 'e'];
	$arr2 = array_replace($arr1, [0=>'!', 3=>'!!']);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// (СПОСОБ АВТОРА):
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$result = array_replace($arr, [0=>'!', 3=>'!!']));
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем заявленный ассоциативный массив, после чего поочерёдно применяем 10 встроенных функций для сортировки нашего массива и каждый из таких результатов выводим в браузер (МОЙ СПОСОБ (ПОЧТИ АНАЛОГИЧЕН СПОСОБУ АВТОРА)):
	$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
	sort($arr);
	//rsort($arr);
	//asort($arr);
	//arsort($arr);
	//ksort($arr);
	//krsort($arr);
	//usort($arr);
	//uasort($arr);
	//uksort($arr);
	//natsort($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// объявляем переменные "$arr" и "$randkey", в 1-ю из которых записываем заявленный ассоциативный массив, а во 2-ю - объявляем встроенную функцию "array_rand()" (возврата случайного ключа), после чего выводим в браузер результат работы указанной функции (МОЙ СПОСОБ):
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	$randkey = array_rand($arr);
	echo "<pre>";
	print_r($randkey);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo array_rand($arr);
	
	// объявляем переменные "$arr" и "$randkey", в 1-ю из которых записываем заявленный ассоциативный массив, а во 2-ю - объявляем встроенную функцию "array_rand()" (возврата случайного ключа), после чего, передавая встроенной функции "print_r()" единственный параметр в виде переменной - массива с ключом - переменной функции, выводим в браузер результат работы указанной функции (МОЙ СПОСОБ):
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	$randkey = array_rand($arr);
	echo "<pre>";
	print_r($arr[$randkey]);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = ['a'=>1, 'b'=>2, 'c'=>3];
	echo $arr[array_rand($arr)];
	
	// объявляем переменную "$arr", в которую записываем произвольный массив, после чего, передавая встроенной функции "shuffle()" (случайного порядка), единственный параметр в виде переменной - нашего массива, выводим в браузер все элементы нашего массиваа в случайном порядке (МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5];
	shuffle($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// объявляем переменную "$arr", в которую записываем встроенную функцию "range()" (заполнения массива) с числовым диапазоном от "1" до "25"(эти числа мы записываем как параметры данной функции), после чего, применяя встроенную функцию "shuffle()" (случайного порядка), единственный параметр в виде переменной - нашего массива, выводим в браузер все элементы нашего массива в случайном порядке (МОЙ СПОСОБ):
	$arr = range(1, 25);
	shuffle($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = range(1, 25);
	shuffle($arr);
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем встроенную функцию "range()" (заполнения массива) со строковым диапазоном от "a" до "z"(эти строки мы записываем как параметры данной функции), после чего, применяя встроенную функцию "shuffle()" (случайного порядка), единственный параметр в виде переменной - нашего массива, выводим в браузер все элементы нашего массива в случайном порядке (МОЙ СПОСОБ):
	$arr = range('a', 'z');
	shuffle($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = range('a', 'z');
	shuffle($arr);
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем встроенную функцию "range()" (заполнения массива) со строковым диапазоном от "a" до "f"(эти строки мы записываем как параметры данной функции), после чего применяем встроенную функции "shuffle()" (случайного порядка), единственный параметр в котором - наша переменная(массив), дадее в отдельную переменную "$str" записываем встроенную функцию "implode()" (преобразования массива в строку) и выводим полученную строку в браузер (МОЙ СПОСОБ (ПОЧТИ АНАЛОГИЧЕН СПОСОБУ АВТОРА)):
	$arr = range('a', 'f');
	shuffle($arr);
	$str = implode(', ', $arr);
	echo $str;
	
	// объявляем переменную "$arr", в которую записываем заявленный строковый массив, после чего, применяя встроенную функцию "array_unique()" (удаления повторяющихся элементов массива), единственный параметр в виде переменной - нашего массива, выводим в браузер элементы нашего массива без повторения (МОЙ СПОСОБ):
	$arr = ['a', 'b', 'c', 'b', 'a'];
	echo "<pre>";
	print_r(array_unique($arr));
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = ['a', 'b', 'c', 'b', 'a'];
	$arr = array_unique($arr);
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив, после чего, применяя встроенные функции "array_shift()" (удаления из массива первого элемента и его возврата) и "array_pop()" (удаления из массива последнего элемента и его возврата), выводим в браузер указанные элементы массива, затем сам массив с оставшимися элементами (МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5];
	echo array_shift($arr)."<br>".array_pop($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	echo array_shift($arr); //первый элемент
	echo array_pop($arr); //последний элемент
	var_dump($arr); //проверим, что в массиве они исчезли
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив, после чего объявляем встроенные функции "array_unshift()" (добавления нового(-ых) элемента(-ов) в начало массива) и "array_push()" (добавления нового(-ых) элемента(-ов) в конец массива) и выводим в браузер конечный массив (МОЙ СПОСОБ):
	$arr = [1, 2, 3, 4, 5];
	array_unshift($arr, 0);
	array_push($arr, 6);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	array_unshift($arr, 0);
	array_push($arr, 6);
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем заявленный числовой массив, затем объявляем пустую строковую переменную "$str", после чего объявляем цикл по конструкции "while", в условии которого указываем, что кол-во элементов должно превышать числовое значение "0", а в теле - сначала нашей пустой переменной присваиваем элемент массива, который расположен в его начале, затем полученной переменной присваиваем элемент массива, который расположен в его конце, и после этого выводим в браузер конечный строковый результат (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$str = '';
	while (count($arr) > 0) {
		$str .= array_shift($arr);
		$str .= array_pop($arr);
	}
	echo $str;
	
	// объявляем переменную "$arr1", в которую записываем заявленный строковый массив, переменную "$arr2", в которую записываем встроенную функцию "array_pad" (дополнения сущестувющего массива) с 3-мя параметрами: нашей переменной, конечным кол-вом элементов массива и элементом, которым мы дополняем массив, затем выводим конечный массив в браузер (МОЙ СПОСОБ):
	$arr1 = ['a', 'b', 'c'];
	$arr2 = array_pad($arr1, 6, '-');
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = ['a', 'b', 'c'];
	$arr = array_pad($arr, 6, '-');
	var_dump($arr);
	
	// объявляем переменную "$arr", в которую записываем встроенную функцию "array_fill()" (создания массива, заполненного элементами с определённым значением), в которой 1-й параметр - начальный ключ, 2-й - конечное кол-во элементов, а 3-й - сам элемент, который нам необходимо продублировать в массиве, после чего полученный результат выводим в браузер (МОЙ СПОСОБ):
	$arr = array_fill(0, 10, 'x');
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = array_fill(0, 10, 'x');
	var_dump($arr);
	
	// объявляем переменную "$arr1", в которую с помощью встроенной функции "range()" записываем массив, заполненный числами от "1" до "20", переменную "$arr2", в которую записываем встроенную функцию "array_chunk()" (разбивки одномерного массива на двумерный), в которой 1-м параметром указываем нашу первичную переменную, а 2-м - кол-во элементов в каждом подмассиве двумерного массива, после чего выводим конечный массив в браузер (МОЙ СПОСОБ):
	$arr1 = range(1, 20);
	$arr2 = array_chunk($arr1, 4);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = range(1, 20);
	var_dump(array_chunk($arr, 4));
	
	// объявляем переменную "$arr1", в которую записываем заявленный строковый массив, переменную "$arr2", в которую записываем встроенную функцию "array_count_values" (подсчёта всех значений массива), в которой единственным параметром указываем нашу первичную переменную, после чего выводим в браузер конечный массив, в котором ключи - элементы нашего первичного массива, значения - число каждого элемента (МОЙ СПОСОБ):
	$arr1 = ['a', 'b', 'c', 'b', 'a'];
	$arr2 = array_count_values($arr1);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = ['a', 'a', 'a', 'b', 'b', 'c'];
	var_dump(array_count_values($arr));
	
	// объявляем переменную "$arr1", в которую записываем заявленный числовой массив, переменную "$arr2", в которую записываем встроенную функцию "array_map" (применения заданной функции ко всем элементам массива), в которой 1-м параметром в виде строки указываем название интересующей нас операции (в данном случае это название функции (арифметической операции) извлечения квадратного корня каждого элемента массива), а 2-м - нашу первичную переменную-массив, после чего выводим в браузер конечный массив, в котором ключи - элементы нашего первичного массива, значения - число каждого элемента (МОЙ СПОСОБ):
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = array_map('sqrt', $arr1);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = [1, 2, 3, 4, 5];
	$result = array_map('sqrt', $arr);
	var_dump($result);
	
	// объявляем переменную "$arr", в которую записываем заявленный строковый массив, переменную "$result", в которую записываем встроенную функцию "array_map" (применения заданной функции ко всем элементам массива), в которой 1-м параметром в виде строки указываем название интересующей нас операции (в данном случае это название функции удаления html-тегов из строки), а 2-м - нашу первичную переменную-массив, после чего выводим в браузер конечный массив, в котором html-теги уже отсутствуют (СПОСОБ АВТОРА):
	$arr = ['<b>php</b>', '<i>html</i>'];
	$result = array_map('strip_tags', $arr);
	var_dump($result);
	
	// объявляем переменную "$arr1", в которую записываем заявленный строковый массив, переменную "$arr2", в которую записываем встроенную функцию "array_map" (применения заданной функции ко всем элементам массива), в которой 1-м параметром в виде строки указываем название интересующей нас операции (в данном случае это название функции удаления пробельных символов из строки), а 2-м - нашу первичную переменную-массив, после чего выводим в браузер конечный массив, в котором пробельные символы уже отсутствуют (МОЙ СПОСОБ (АНАЛОГИЧЕН СПОСОБУ АВТОРА)):
	$arr1 = [' a ', ' b ', ' с '];
	$arr2 = array_map('trim', $arr1);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// объявляем переменную "$arr1", в которую записываем 1-й заявленный числовой массив, переменную "$arr2", в которую записываем 2-й заявленный числовой массив, и переменную "$arr3", в которую записываем встроенную функцию "array_intersect()" (вычисления пересечения массивов) с первым параметром в виде первой переменной и вторым параметром - второй, после чего выводим в браузер полученный результат - элементы, которые встречаются в обоих массивах (МОЙ СПОСОБ):
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
	$arr3 = array_intersect($arr1, $arr2);
	echo "<pre>";
	print_r($arr3);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
	$result = array_intersect($arr1, $arr2);
	var_dump($result);
	
	// объявляем переменную "$arr1", в которую записываем 1-й заявленный числовой массив, переменную "$arr2", в которую записываем 2-й заявленный числовой массив, и переменную "$arr3", в которую записываем встроенную функцию "array_intersect()" (вычисления различия массивов) с первым параметром в виде первой переменной и вторым параметром - второй, после чего выводим в браузер полученный результат - элементы, которые не встречаются в обоих массивах (МОЙ СПОСОБ):
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
	$arr3 = array_diff($arr1, $arr2);
	echo "<pre>";
	print_r($arr3);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
	$result = array_diff($arr1, $arr2);
	var_dump($result);
	
	// объявляем переменную "$str", в которую записываем заявленную числовую строку, переменную "$arr1", в которую записываем встроенную функцию "str_split()" (второго способа преобразования строки в массив), в которой 1-й параметр - наша переменная строки, 2-я - кол-во символов в элементе, переменную "$arr2", в которую записываем встроенную функцию "array_sum()" (вычисления суммы всех числовых элементов массива), в которой единственный параметр - переменная массива ("$arr1"), после чего выводим в браузер полученный результат - сумму всех элементов строки/массива (МОЙ СПОСОБ):
	$str = '1234567890';
	$arr1 = str_split($str, 1);
	$arr2 = array_sum($arr1);
	echo $arr2;
	
	// - (СПОСОБ АВТОРА):
	echo array_sum(str_split('1234567890', 1));
	
	// объявляем переменную "$arr1", в которую записываем встроенную функцию "range()" (заполнения массива элементами в порядке возрастания/убывания либо в другом (например, алфавитном) порядке) со строковыми параметрами "a" и "z", переменную "$arr2" - аналогично, только с числовыми параметрами "1" и "26", переменную "$arr3", в которую записываем встроенную функцию "array_combine()" (слияния 2-х массивов в 1 в виде "ключ - значение", где 1-й из исходных массивов - ключ, а 2-й - значение) с параметрами в виде 2-х наших полученных массивов, после чего выводим в браузер полученный результат - массив, в котором ключи - наш бывший первый массив, значения - второй (МОЙ СПОСОБ):
	$arr1 = range('a', 'z');
	$arr2 = range(1, 26);
	$arr3 = array_combine($arr1, $arr2);
	echo "<pre>";
	print_r($arr3);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$keys = range('a', 'z');
	$values = range(1, 26);
	$arr = array_combine($keys, $values);
	var_dump($arr);
	
	// объявляем переменную "$arr1", в которую записываем массив, содержащий числа от "1" до "9", объявляем переменную "$arr2", в которую записываем встроенную функцию "array_chunk()" (разбивки одномерного массива на двумерный) с 1-м параметром в виде переменной массива и 2-м - кол-во элементов в каждом подмассиве нашего массива, после чего выводим в браузер полученный результат - двумерный массив (МОЙ СПОСОБ):
	$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$arr2 = array_chunk($arr1, 3);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	
	// - (СПОСОБ АВТОРА):
	$arr = range(1, 9);
	var_dump(array_chunk($arr, 3));
	
	// объявляем переменную "$arr1", в которую записываем заявленный числовой массив, объявляем переменную "$newArr", в которую записываем встроенную функцию "array_unique()" (удаления повторяющихся элементов массива) с единственным параметром в виде переменной массива, объявляем встроенную функцию "rsort()" с единственным параметром в виде переменной "$newArr", после чего выводим в браузер элемент массива "$newArr" с индексом "1" (СПОСОБ АВТОРА):
	$arr = [1, 2, 4, 5, 5];
	$newArr = array_unique($arr); //удалим дубли
	rsort($newArr); //посортируем массив по убыванию
	echo $newArr[1]; //возьмем второй элемент
	
?>

</body>
</html>