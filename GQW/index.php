<?php session_start(); ?>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="_css/registration_form.css">
		<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">
		<title>Own Project</title>
	</head>	
	<body>
		<?php include ('db(back-end).php')?>
		<div class="main">
			<div class="inline">
					<h2>Регистрация</h2>
					<form method="POST">
						
						<?php 
						if (isset($smsg))
							{
								?>
								<div class='alert-success'>
									<?php echo $smsg; ?> 
								</div>
							<?php } ?>
						
						
						<?php 
						if (isset($fsmsg)) 
						{?>
							<div class='alert-unsuccess'>
								<?php echo $fsmsg; ?> 
							</div>
						<?php } ?>
						
						<div class="log">
							<label> ФИО: </label>
							<input type="text" name="fullnames" value="">
						</div>

						<div class="log">
							<label>E-mail:</label> 
							<input type="email" name="mails">
						</div> 

						<div class="log">
							<label>Введите логин: </label>
							<input type="text" name="logins">
						</div>

						<div class="log">
							<label>Введите пароль: </label>
							<input type="password" name="password_1">
						</div>

						<div class="log">
							<label>Подтвердить пароль: </label>
							<input type="password" name="password_2">
						</div>
						<br>
						<button class="btn" type="submit">Зарегистрироватся</button>
						<!-- <input type="submit" value="Зарегистрироватся" > -->
						<a href="Login.php">Войти</a>
					</form>
				
					
					 
	
			</div>
		</div>
		<br>
		
	</body>

</html>



