<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Задачи на формы в PHP</title>
	<meta charset="utf-8">
</head>
<body>

<?php

	// объявляем форму обратной связи, в которой атрибут "action" у нас остаётся пустым, атрибуту "method" указываем значение "GET", а в теле формы указываем 1 поле ввода текста с именем "name" и 1 кнопку отправки формы, затем объявляем условие по конструкции "if-else", по условию которого если ключ 'name' (соответствующий нашему имени "name") глобального массива, записанного в глобальную переменную "$_REQUEST", непустой, то в его теле мы объявляем переменную "$name", которой присваиваем значение, соответствующее значению ключа 'name', и выводим в браузер сообщение 'Привет, %Имя%' (МОЙ СПОСОБ):
	<form action="" method="GET">
		<input type="text" name="name">
		<input type="submit">
	</form>
	<?php
		if (!empty($_REQUEST['name'])) {
			$name = $_REQUEST['name'];
			echo "Привет, $name!";
		}
	?>
	
	// - (СПОСОБ АВТОРА):
	<form action="" method="GET">
		<input type="text" name="name">
		<input type="submit">
	</form>
	<?php
		if (isset($_REQUEST['name'])) {
			$name = $_REQUEST['name'];
			echo 'Привет,'.$name;
		}
	?>
	
	// объявляем форму обратной связи, в которой атрибут "action" у нас остаётся пустым, атрибуту "method" указываем значение "GET", а в теле формы указываем 2 поля ввода текста с именами "name" и "age", 1 поле комментария с именем "message" и 1 кнопку отправки формы, затем объявляем условие по конструкции "if-else", по условию которого если ключи 'name', 'age' и 'message' (соответствующие именам формы с такими же названиями) глобального массива, записанного в глобальную переменную "$_REQUEST", непустой, то в его теле мы объявляем переменные "$name", "$age" и "$message", которым присваиваем значения, соответствующие значениям ключей 'name', 'age' и 'message' (при этом по условию задачи в данном случае обязательно использование встроенной функции для защиты сайта от "засора"), и выводим в браузер сообщение 'Привет, %Имя%, %Возраст% лет. [перенос строки] Твоё сообщение: %Сообщение%' (МОЙ СПОСОБ):
	<form action="" method="GET">
		<input type="text" name="name"><br><br>
		<input type="text" name="age"><br><br>
		<textarea name="message" placeholder="Введите сообщение"></textarea><br><br>
		<input type="submit">
	</form>
	<?php
		if (!empty($_REQUEST['name']) && !empty($_REQUEST['age']) && !empty($_REQUEST['message'])) {
			$name = htmlspecialchars($_REQUEST['name']);
			$age = htmlspecialchars($_REQUEST['age']);
			$message = htmlspecialchars($_REQUEST['message']);
			echo "Привет, $name, $age лет."."<br>"."Твоё сообщение: $message";
		}
	?>
	
	// - (СПОСОБ АВТОРА):
	<form action="" method="GET">
		<input type="text" name="name">
		<input type="text" name="age">
		<textarea name="message"></textarea>
		<input type="submit" name="submit">
	</form>
	<?php
		if (isset($_REQUEST['submit'])) {
			$age = strip_tags($_REQUEST['age']);
			$name = strip_tags($_REQUEST['name']);
			$message = strip_tags($_REQUEST['message']);
			echo "Привет, $name, $age <br> твое сообщение: $message";
		}
	?>
	
	// Объявляем условие по конструкции "if-else", согласно которому, если ключ 'age' у нас не пустой, то мы объявляем форму обратной связи, в которой атрибут "action" у нас остаётся пустым, атрибуту "method" указываем значение "GET", а в теле формы указываем 1 поле ввода текста с именем "age" и 1 кнопку отправки формы, затем объявляем условие по конструкции "if-else", по условию которого если ключ 'age' (соответствующий имени формы с таким же названием) глобального массива, записанного в глобальную переменную "$_REQUEST", непустой И если содержит значение в виде целого числа, то в его теле мы объявляем переменную "$age", которой присваиваем значение, соответствующее значению ключа 'age', и выводим в браузер сообщение 'Вам %Возраст% лет!' (МОЙ СПОСОБ (С НЕЗНАЧИТЕЛЬНОЙ ИМПРОВИЗАЦИЕЙ)):
	<?php if (empty($_REQUEST['age'])) : ?>
		<form action="" method="GET">
			<input type="text" name="age"><br><br>
			<input type="submit">
		</form>
	<?php endif ?>
	<?php
		if (!empty($_REQUEST['age']) && is_numeric($_REQUEST['age']) == "integer") {
			$age = $_REQUEST['age'];
			echo "Вам $age лет!";
		}
	?>
	
	// - (СПОСОБ АВТОРА):
	<?php
		if (!isset($_REQUEST['age'])) {
	?>
		<form action="" method="GET">
			<input type="text" name="age">
			<input type="submit">
		</form>
	<?php
		}
	?>
	<?php
		if (isset($_REQUEST['age'])) {
			$age = strip_tags($_REQUEST['age']);
			echo 'Ваш возраст: '.$age;
		}
	?>
	
	// Объявляем условие по конструкции "if-else", согласно которому, если ключ 'login' ИЛИ ключ 'pass' у нас не пустой, то мы объявляем форму обратной связи, в которой атрибут "action" у нас остаётся пустым, атрибуту "method" указываем значение "POST", а в теле формы указываем 1 поле ввода текста с именем "login", 1 поле ввода пароля с именем "pass" и 1 кнопку отправки формы, далее объявляем переменные "$trueLogin" и "$truePass", которым присваиваем произвольные строковые значения, затем объявляем условие по конструкции "if-else", по условию которого если ключи 'login' и 'pass' (соответствующие именам формы с такими же названиями) глобального массива, записанного в глобальную переменную "$_REQUEST", непустые, то в его теле мы объявляем переменные "$login" и "$pass", которым присваиваем значения, соответствующие значениям ключей 'login' и 'pass' (при этом по условию задачи в данном случае обязательно использование встроенной функции для обрезания пробельных символов), далее объявляем условие по конструкции "if-else", по которому если значение переменной "$login" соответствует значению переменной "$trueLogin" И значение переменной "$pass" соответствует значению переменной "$truePass", то мы выводим в браузер сообщение "Доступ разрешён!", иначе - "Доступ запрещён!" (МОЙ СПОСОБ):

	<?php if (empty($_REQUEST['login']) || empty($_REQUEST['pass'])) : ?>
		<form action="" method="POST">
			<input type="text" name="login"><br><br>
			<input type="password" name="pass"><br><br>
			<input type="submit">
		</form>
	<?php endif ?>
	<?php
		$trueLogin = "Dom";
		$truePass = "000000";
		if (!empty($_REQUEST['login']) && !empty($_REQUEST['pass'])) {
			$login = trim($_REQUEST['login']);
			$pass = trim($_REQUEST['pass']);
			if ($login == $trueLogin && $pass == $truePass) {
				echo "Доступ разрешён!";
			} else {
				echo "Доступ запрещён!";
			}
		}
	?>
	
	// - (СПОСОБ АВТОРА):
	<form action="" method="GET">
		<input type="text" name="login">
		<input type="password" name="pass">
		<input type="submit" name="submit">
	</form>
	<?php
		if (isset($_REQUEST['submit'])) {
			$login = 'user';
			$pass = '123456';
			$formLogin = trim($_REQUEST['login']);
			$formPass = trim($_REQUEST['pass']);
			if ($login == $formLogin and $pass == $formPass) {
				echo 'Доступ разрешен!';
			} else {
				echo 'Доступ запрещен!';
			}
		}
	?>
	
	// Объявляем форму обратной связи, в которой атрибут "action" у нас остаётся пустым, атрибуту "method" указываем значение "GET", а в теле формы указываем 1 поле ввода текста с именем "name", атрибутом "value" со значением (условием: если ключ 'name' имеется, то выводим его значение в браузер) и 1 кнопку отправки формы, затем объявляем условие по конструкции "if-else", по условию которого если ключ 'submit' непустой (то есть, нажата кнопка отправки формы), то в его теле мы объявляем переменную "$name", которому присваиваем значение, соответствующее значению ключа 'name', далее выводим в браузер значение этой переменной (СПОСОБ АВТОРА):
	<form action="" method="GET">
		<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
		<input type="submit">
	</form>
	<?php
		if (isset($_REQUEST['submit'])) {
			$name = $_REQUEST['name'];
			echo $name;
		}
	?>
	
	// Объявляем форму обратной связи, в которой атрибут "action" у нас остаётся пустым, атрибуту "method" указываем значение "GET", а в теле формы указываем 1 поле ввода текста с именем "name", атрибутом "value" со значением (условием: если ключ 'name' непустой, то выводим его значение в браузер), 1 поле ввода комментария с именем "message" в теле которого объявляем следующее условие по конструкции "if-else", по условии которого если ключ 'message' массива непустой, то необходимо вывести в браузер его значение, и 1 кнопку отправки формы (СПОСОБ АВТОРА (немного переделанный)):
	<form action="" method="GET">
		<input name="name" value=" <?php if (!empty($_GET['name'])) echo $_GET['name']; ?> "><br><br>
		<textarea name="message"> <?php if (!empty($_GET['message'])) echo $_GET['message']; ?> </textarea><br><br>
		<input type="submit">
	</form>

</body>
</html>