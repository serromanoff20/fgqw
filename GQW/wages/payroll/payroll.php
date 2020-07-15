<?php include ('W:\domains\GQWDesignPart\GQW\header.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Holiday</title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_header.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/holyday_and_other.css">
	
</head>
<body>
	<div class="container">
		<div class="task_list">
			<h3>Начисление зарплаты № 
				<input size='3px' type="text" value=<?php echo ''; ?>> 
				от 
				<input type="date" value="<?php echo '1'; ?>">
			</h3>

			<?php include ('payroll(back-end).php') ?>

			<form class="create_elem" action="" method="POST">
				<div class="first_tr">
					<div class="td">
						<ul>Организация: </ul>
						<?php include('W:\domains\GQWDesignPart\GQW\query_toOrg.php');?>
						<select name="" id="">
							<option value="<?php echo $res[0] ?>">
								<?php echo $res[1];?>
									
							</option>
							<option value=""></option>
						</select>
					</div>
					<div class="td">
						<ul>Зарплата за период: </ul>
						<input type="month">
					</div>
				</div>
	 			

				<div class="third_tr">
					<div class="td">
						<ul>Подразделение: </ul>
						<select class="entry_field" name="Department">
							<option value="1">Администрация</option>
							<option value="2">Бухгалтерия</option>
						</select>
					</div>
				</div>						

				<div class="for_tr">
					<table>
						<tr>
							<td>
								<p>Сотрудник</p>
							</td>
							<td>
								<p>Вид начисления</p>
							</td>
							<td>
								<p>Размер начисления</p>
							</td>
						</tr>
						<?php  
							$query_toEmploye = 
							"SELECT * FROM employee 
							  LEFT OUTER JOIN laborContract
							   ON employee.id_employee = laborContract.id_employee
							   WHERE laborContract.id_employee > 0";
							$result_toEmloyee = mysqli_query($link, $query_toEmploye) 
								or die ('Что-то не то!');
							if ($result_toEmloyee) {
								$rows = mysqli_num_rows($result_toEmloyee);
								for ($i=0; $i < $rows; $i++) { 
									$row = mysqli_fetch_row($result_toEmloyee);
									
						?>
						<tr>
							<td>
								<?php echo $row[1]; ?>
							</td>
							<td>
								<?php echo $row[14]; ?>
							</td>
							<td>
								<?php echo $row[15]; ?>
							</td>
						</tr>
						<?php	}
							}
							
						?>

					</table>
				</div>

				<button type="submit">Провести</button>
				<input type="button" value="Записать">
				<input type="button" value="Напечатать">
			</form>
 		</div>
	</div>
	
</body>
</html>