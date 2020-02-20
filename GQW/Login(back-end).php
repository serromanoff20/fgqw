<?php
		
		require('connect.php');

		// $name = $_POST['names'];
		$login = $_POST['logins'];
		$password = $_POST['password_1'];		
		
		if (!empty($login) and !empty($password))
		{
			$query = "SELECT * FROM users WHERE logins='$login' AND passwords='$password'";
			$result2 = mysqli_query($link,$query) or die(mysqli_error($link));
			
			

			if ($result2) {
				$count = mysqli_fetch_row($result2);
				
				if ($count[3] == $login && $count[4] == $password){
					$_SESSION['logins'] = ['logins'=>$login,'passwords'=>$password];
					//header('');

				} else {
					echo "<script>
						alert('Неверно заполнены поля! Вернитесь назад!');
					</script>";
				}
			}
		}
?>