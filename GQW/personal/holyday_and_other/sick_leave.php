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
			<h3>Больничный № 
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
	 			
				<div class="first_tr">
					<ul>Больничный лист №: </ul>
					<input type="text" class="">
				</div>

	 			<div class="second_tr">
		 			<ul>Период: </ul>
					с <input type="date"> до <input type="date">
				</div>

				<div class="third_tr">
					<ul>Начислено: </ul>
					<input type="text" class="input" value="1 руб.">
					НДФЛ:
					<input type="text" class="input">
				</div>						

				<button type="submit">Провести</button>
				<input type="button" value="Записать">
				<input type="button" value="Напечатать">
			</form>
 		</div>
	</div>
	
</body>
</html>