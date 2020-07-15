<?php 
	
	$LastName_employee = $_POST['LastName_employee'];
	$FirstName_employee = $_POST['FirstName_employee'];
	$FatherName_employee = $_POST['FatherName_employee'];
	$Department = $_POST['Department'];
	$Position = $_POST['Position'];
	$date_birth = $_POST['date_birth'];
	$gender = $_POST['gender'];
	$Organization = $_POST['selectOrg'];
	$id_employee = $_POST['id_employee'];

	if (!empty($LastName_employee)) {
		

		$query_toEmployee = "INSERT INTO employee VALUES ('$id_employee', '$LastName_employee', '$FirstName_employee', '$FatherName_employee', '$Department', '$Position', '$gender', '$date_birth', '$Organization');";
		$result_toEmloyee = mysqli_query($link, $query_toEmployee) or die ('Что-то пошло не так!');
		echo "<div class='classSuccess'>Успешно!</div>";
		
	} else {
		echo "<div class='classError'>Вы не заполнили <b style='color:red'>*</b>необходимые реквезиты !</div>";
	}


?>