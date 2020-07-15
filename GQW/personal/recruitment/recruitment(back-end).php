<?php 
	
//	$id_LC = $_POST['id_LC'];
	$date_LC = $_POST['date_LC'];
	$employy = $_POST['employy'];
//	$id_organization
	$Department = $_POST['Department'];
	$Position = $_POST['Position'];
	$salary = $_POST['size_salary'];
//	$posted
	$type_accural = "SELECT name_list FROM listDocument";
	// $_POST['type_accural'];

	if (isset($employy)) {
		$query_LC = "INSERT INTO labor contract('id_LC', 'date_LC', 'id_employee', 'id_organization', 'id_deportament', 'position', 'salary', 'posted', '') VALUES (NULL, '$date_LC', '$employy', '0', '$Department', '$Position', '$salary', '0', '$type_accural');";
		
		$result_LC = mysqli_query($link, $query_LC);

		// $res = mysqli_fetch_row($result_LC);

		if ($result_LC) {
			echo "<div class='classSuccess'>Успешно!</div>";
		} else{
			echo "<div class='classError'>Данные заполнены не корректно!</div>";
		}
	} else{
		echo "<div class='classError'>Вы не заполнили <b style='color:red'>* </b>необходимые реквезиты!</div>";
	}


		// echo 'Дата: '.$date_LC;
		// echo 'Сотрудник: '.$employy;
		// echo 'Отдел: '.$Department;
		// echo 'Должность: '.$Position;
	//	$id_organization
		// echo 'Размер оклада: '.$salary;
	//	$posted
		// echo 'Вид начисления: '.$type_accural;

?>