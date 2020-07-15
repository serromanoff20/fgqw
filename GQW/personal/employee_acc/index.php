<?php 
	include ('W:\domains\GQWDesignPart\GQW\header.php')?>

<html>
 <head>
	<meta charset="utf-8">
	<title>list_employee</title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">

	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_header.css">

	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/list.css">

	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/forma_create.css">
 </head>
 <body>
 	<div class="container">

 		<?php 
 			$query_toEmploye = "SELECT * FROM employee WHERE id_employee = 2";
			$result_toEmloyee = mysqli_query($link, $query_toEmploye) or die ('Что-то не то!');
			if ($result_toEmloyee) {
			
				echo "<div class='report_block'>
					<h3>Личная карточка:</h3>";
					while(list($id_employy, $lastName, $firstName, $fatherName, $deportament, $position, $gender, $date_birth) = mysqli_fetch_row($result_toEmloyee)) {
						echo "<h3>$lastName $firstName $fatherName</h3>";

					
						echo '<p>Основная чать: </p>
					<div class="blockFooter">
						
						
						<select class="entry_field" name="Department">
							<option value="1">Администрация</option>
							<option value="2">Бухгалтерия</option>
						</select>
						
						<input type="text" name="Position" class="entry_field" placeholder="Должность">

					</div>
					
					<div class="blockMainInfo">
						<input type="date" class="input_entry" name="date_birth" value="2002-01-01" max="2002-01-01">
						<select class="input_entry" name="gender" size="1">
							<option value="Муж.">Муж.</option>
							<option value="Жен.">Жен.</option>
						</select>

					</div>
					<hr>
					<p>Дети:</p>
					<table style="width:100%">
						<tr style="border: 1px solid #000">
						<td >
							<label>ФИО ребёнка: </label>
						</td>
						<td >
							<input type="text">
						</td>
						</tr>
						<td>
							<label>Дата рождения: </label>
						</td>
						<td >
							<input type="date">
						</td>
						</tr>
					</table>
					<hr>
					<p>Дополнительная информация: </p>
					<div class="blockFooter">';?>
					<?php include("W:\domains\GQWDesignPart\GQW\query_toOrg.php");
					?><?php echo '
						<select name="selectOrg">
							<option value="<?php echo $res[0] ?>">';?>
								<?php 
									if($res){
										echo $res[1];
									} else {
										echo "Ошибка";
									};
								?>
								<?php echo '
							</option>
							
						</select>
						<input type="text" name="id_employee" class="entry_field" value='?> <?php echo $id_employy?> >
					</div>
					<?php  
					}
				echo "
					<input type='button' value='Записать'>
				</div>";	
			}	
		?>
		
		<br>

		
			
			 <!-- <?php //include ('forma_create(back-end).php') ?> -->			
						
					
 	</div>
 </body>
</html>