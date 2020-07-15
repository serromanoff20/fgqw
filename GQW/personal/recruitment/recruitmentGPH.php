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
			<h3>Договор гаржданско-правового характера № 
				<input size='3px' type="text" value=<?php echo ''; ?>> 
				<br>
				от 
				<input type="date" value="<?php echo '1'; ?>">
			</h3>

			 <?php include ('recruitment(back-end).php') ?>

				<form class="create_elem" action="" method="POST">
					<table>
						<tr>
							<td>
								<ul>Сотрудник: </ul>
							</td>
							<td>
	 							<input type="text"class="select employy" name="select_employy">
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
								<input type="text" name="Position" class="select">
							</td>
						</tr>
					</table>			
					<table class="accrual">
						<tr>
							<b><td>№</td><td>Вид начисления</td><td>Размер</td></b>
						</tr>
						<tr>
							<td><ul>1</ul></td>
							<td><input type="text" class="input type_accrual"></td>
							<td><input type="text" class="input size_salary"></td>
						</tr>
						<tr>
							<td><ul>2</ul></td>
							<td><input type="text" class="input type_accrual"></td>
							<td><input type="text" class="input size_salary"></td>
						</tr>
					</table>
					<div class="footer">
						<ul>Срок окончания договора: </ul> 
						<input type="date">
					</div>
					<button type="submit">Создать сотрудника</button>
				</form>
 		</div>
	</div>
	
</body>
</html>