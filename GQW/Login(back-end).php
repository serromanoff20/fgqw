<?php
		//header('Location: mainpage/index_main.php');
		session_start();
		

		require('connect(back-end).php');

		$login = $_POST['logins'];
		$password = $_POST['password_1'];
				
		
		if (isset($login) and isset($password))
		{
			$query = "SELECT * FROM users WHERE logins='$login' AND passwords='$password'";
			$result2 = mysqli_query($link,$query) or die(mysqli_error($link));
			$count = mysqli_fetch_row($result2);

			if ($count[3] == $login){
					$adres = 'mainpage/index_main.php';


					
					$_SESSION['log'] = $login;
					
					//setcookie('log', $login);
			
			} else {
				echo "<script>
						alert('Поля заполнены неверно! Возможно такого сотрудника не существует!');
					</script>";
			}
		}
?>