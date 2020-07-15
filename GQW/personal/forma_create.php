<?php include ('W:\domains\GQWDesignPart\GQW\header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create to emloyee</title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_header.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/forma_create.css">
	
</head>
<body>
	<div class="container">
		<div class="task_list">
			<p>Создание сотрудника:</p>

			 <?php include ('forma_create(back-end).php') ?>

				<form class="create_elem" action="" method="POST">
					<div class="blockFIO">
						<b style='color:red'>*</b><input type="text"class="entry_field" name="LastName_employee" placeholder="Фамилия">
						<input type="text" class="entry_field" name="FirstName_employee" placeholder="Имя">
						<input type="text"class="entry_field" name="FatherName_employee" placeholder="Отчество">
					</div>
					
					<div class="blockFooter">
						
						<b style='color:red'>*</b>
						<select class="entry_field" name="Department">
							<option value="1">Администрация</option>
							<option value="2">Бухгалтерия</option>
						</select>
						
						<input type="text" name="Position" class="entry_field" placeholder="Должность">

					</div>

					<hr>
					<div class="blockMainInfo">
						<b style='color:red'>*</b><input type="date" class="input_entry" name="date_birth" value="2002-01-01" max="2002-01-01">
						<select class="input_entry" name="gender" size="1">
							<option value="Муж.">Муж.</option>
							<option value="Жен.">Жен.</option>
						</select>

					</div>
					<hr>
					<div class="blockFooter">
					<?php include('W:\domains\GQWDesignPart\GQW\query_toOrg.php');
					?>
						<select name="selectOrg">
							<option value="<?php echo $res[0] ?>">
								<?php 
									if($res){
										echo $res[1];
									} else {
										echo "Ошибка";
									};
								?>
								
							</option>
							
						</select>
						<input type="text" name="id_employee" class="entry_field" placeholder="Таб.номер" value='<?php ?>'>
					</div>
					<button type="submit">Создать сотрудника</button>
				</form>
		</div>
	</div>
	
</body>
</html>