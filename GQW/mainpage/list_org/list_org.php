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
 			$query_toEmploye = "SELECT * FROM organization";
			$result_toEmloyee = mysqli_query($link, $query_toEmploye) or die ('Что-то не то!');
			
			echo "<div class='report_block'>
				<h3>Организации: </h3>";

				if ($result_toEmloyee) {
					echo "<br>
						<table border='1px'>

						<tr>
							<td>
								<b>№ Орг.</b>
							</td>
							<td>
								<b>Рабочее название</b>
							</td>
							<td>
								<b>Полное наименование организации</b>
							</td>
							<td>
								<b>Вид орг.</b>
							</td>
							<td>
								<b>Префикс</b>
							</td>
							<td>
								<b>ИНН</b>
							</td>
							<td>
								<b>КПП</b>
							</td>
							<td>
								<b>ОГРН</b>
							</td>
						</tr>
					";
					while (list($id_employy, $lastName, $firstName, $fatherName, $deportament, $position, $gender, $date_birth) = mysqli_fetch_row($result_toEmloyee)) {
						echo "<tr>
								<td>$id_employy</td>
								<td>$lastName</td>
								<td>$firstName</td>
								<td>$fatherName</td>
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