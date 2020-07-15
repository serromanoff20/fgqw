<?php 
	session_start();
	
	// setcookie('log', $_COOKIE['log']);

	require('W:\domains\GQWDesignPart\GQW\connect(back-end).php');

	$login = $_POST['logins'];
	
	if (!empty($_POST)) {
		$_SESSION['log'] = $login;
	} else {
		$_SESSION['log'] = 'Сергей';//показать этот процесс Димасу Золотухину
		// setcookie('log', $_COOKIE['log']);
	}
?>

<!DOCTYPE html>
<html>
	<div class="header">
		<nav>
			<a href="http://gqwdesignpart/GQW/mainpage/index_main.php"><b>Главная</b></ul>
			<a href="http://gqwdesignpart/GQW/personal/index.php">Сотрудники</a>
			<a href="http://gqwdesignpart/GQW/wages/index.php">Зарплата</a>
			<a href="#">Настройки</a>
			<a href="http://gqwdesignpart/GQW/Logout.php">Выход</a>

		</nav>
		<div class="name_author"> <?php echo "Добро пожаловать, <b>".$_SESSION['log']."! </b>"; ?> </div>
	</div>
</html>