<?php include ('W:\domains\GQWDesignPart\GQW\header.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Create to emloyee</title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_header.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/recruitment.css">
	
</head>
<body>
	<div class="container">
		<div class="task_list">
			<?php include ('recruitment(back-end).php') ?>

			<form class="create_elem" action="" method="POST">
				<h3>Трудовой договор № 
					<input size='3px' type="text" name="id_LC"> 
					от 
					<input type="date" name="date_LC">
				</h3>
				<table>
					<tr>
						<td>
							<ul><b style='color:red'>*</b>Сотрудник: </ul>
						</td>
						<td>
	 						<select class="select" name="employy">
	 							<?php 
	 								$query_toListEmloyy = "SELECT id_employee, LastName, FirstName FROM employee WHERE id_organization=9";
	 								$result_toListEmloyy = mysqli_query($link, $query_toListEmloyy);

	 								if ($result_toListEmloyy) {
	 									$rows = mysqli_num_rows($result_toListEmloyy);
	 									for ($i=0; $i < $rows; $i++) { 
	 										$row = mysqli_fetch_row($result_toListEmloyy);
	 										?>
	 										<option class="select" value="<?php 
	 											echo $row[0];?>">
	 											<?php 
	 											echo $row[1]." ".$row[2];?>
	 										</option>
	 									<?php
	 									};
	 								};
	 							?>
							</select>
	 					</td>
	 				</tr>
	 				<tr>
	 					<td>
							<ul>Подразделение: </ul>
						</td>
	 					<td>
		 					<select class="select" name="Department" id="">
								<option class="select" value="1">Администрация</option>
								<option  class="select" value="2">Бухгалтерия</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<ul>Должность: </ul>
						</td>
						<td>
							<select name="Position" id="">
								<?php 
	 								$query_toPosition = "SELECT id_employee, Position FROM employee";
	 								$result_toPosition = mysqli_query($link, $query_toPosition);

	 								if ($result_toPosition) {
	 									$rowss = mysqli_num_rows($result_toPosition);
	 									for ($i=0; $i < $rowss; $i++) { 
	 										$rows = mysqli_fetch_row($result_toPosition);
	 										?>
	 										<option class="select" value="<?php echo $rows[0]; ?>">
	 											<?php echo $rows[1];?>
	 										</option>
	 									<?php
	 									};
	 								};
	 							?>
	 						</select>
						</td>
					</tr>
				</table>			
				<table class="accrual">
						<tr>
							<b><td>№</td><td><b style='color:red'>*</b>Вид начисления</td><td>Размер</td></b>
						</tr>
						<tr>
							<td><ul>1</ul></td>
							<td><input type="text" name="type_accural" class="input type_accural"></td>
							<td><input type="text" name="size_salary" class="input size_salary"></td>
						</tr>
					</table>
					<button type="submit">Провести</button>
					<input type="button" value="Записать">
					<input type="button" value="Напечатать">
				</form>
 		</div>
	</div>
	
</body>
</html>