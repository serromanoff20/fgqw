<?php 
	include ('W:\domains\GQWDesignPart\GQW\header.php');

?>

<html>
 <head>
	<meta charset="utf-8">
	<title>list_employee</title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">

	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_header.css">

	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/list.css">
 </head>
 <body>
 	<div class="container">

 		<?php 
 			$query_toEmploye = "SELECT * FROM employee";
			$result_toEmloyee = mysqli_query($link, $query_toEmploye) or die ('Что-то не то!');
			
			echo "<div class='report_block'>
				<h3>Cписок сотрудников: </h3>";

				if ($result_toEmloyee) {
					echo "<br>
						<table border='1px'>

						<tr>
							<td>
								<b>Таб. номер</b>
							</td>
							<td>
								<b>ФИО</b>
							</td>
							<td>
								<b>Подразделение</b>
							</td>
							<td>
								<b>Должность</b>
							</td>
							<td>
								<b>Пол</b>
							</td>
							<td>
								<b>Дата рождения</b>
							</td>
						</tr>
					";
					while (list($id_employy, $lastName, $firstName, $fatherName, $deportament, $position, $gender, $date_birth) = mysqli_fetch_row($result_toEmloyee)) {
						echo "<tr>
								<td>$id_employy</td>
								<td><a href='employee_acc/index.php'>$lastName $firstName $fatherName</a></td>
								<td>$deportament</td>
								<td>$position</td>
								<td>$gender</td>
								<td>$date_birth</td>
						</tr>";
					}
					
				}
			echo "</table> </div>";
		?>
 	</div>
 </body>
</html>