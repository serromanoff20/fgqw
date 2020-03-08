<?php 
					
	// $checkbox = $_POST[''];
	$name_tasks = $_POST['name_task'];
	if (!empty($name_tasks)) {
		$queryOnAddTask = "INSERT INTO NOTEBOOK VALUES (NULL, '0', '$name_tasks');";
		$result_query_task = mysqli_query($link, $queryOnAddTask);
	}
	//if ($result_query_task) {
	//	echo "Работает! $name_tasks";
			
	//} else {
	//	echo "Не Работает! $name_tasks";			
	//}
?>