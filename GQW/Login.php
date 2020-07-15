<?php 		
	session_start();
?>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="_css/registration_form.css">
		<link rel="stylesheet" type="text/css" href="_css/style_main.css">
		<title>Own Project</title>
	</head>	
	<body>
		<?php include ('Login(back-end).php')?>
		<div class="main">
			<div class="inline">
					<h2>Вход</h2>
					<form action="mainpage/index_main.php" method="POST">
						<!-- <a href="#">Главная</a> -->
						
						<div class="log">
							<label>Введите логин: </label>
							<input type="text" name="logins">
						</div>

						<div class="log">
							<label>Введите пароль: </label>
							<input type="password" name="password_1">
						</div>
						
						<br>
						<button  type="submit">Войти</button>
						<!-- <input type="submit" value="Зарегистрироватся" > -->
						<a href="index.php">Зарегистрироватся</a>
					</form>
				
			</div>
		</div>
		<br>
		
	</body>

</html>



