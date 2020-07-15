<?php include ('W:\domains\GQWDesignPart\GQW\header.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff movement</title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_header.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/holyday_and_other.css">
	
</head>
<body>
	<div class="container">
		<div class="task_list">
			<h3>Увольнение № 
				<input size='3px' type="text" value=<?php echo ''; ?>> 
				от 
				<input type="date" value="<?php echo '1'; ?>">
			</h3>

			<?php include ('holyday(back-end).php') ?>

			<form class="create_elem" action="" method="POST">
				<div class="first_tr">
					<ul>Сотрудник: </ul>
					<input type="text" class="select employy" name="select_employy">
				</div>
	 			
				<div class="second_tr">
		 			<ul>Должность: </ul>
					<input type="date">
				</div>

				<div class="for_tr">
		 			<ul>Ставка: </ul>
					<input type="text">
				</div>

				<div class="five_tr">
		 			<ul>В подразделение: </ul>
					<input type="text">
				</div>						

				<div class="six_tr">
					<ul>По причине: </ul></td>
					<select name="" id="">
						<option value="">Заявление</option>
						<option value="">Записка-расчёт</option>
					</select>
					<input type="text" class="input size_salary"></td>
				</div>


				<button type="submit">Провести</button>
				<input type="button" value="Записать">
				<input type="button" value="Напечатать">
			</form>
 		</div>
	</div>
	
</body>
</html>