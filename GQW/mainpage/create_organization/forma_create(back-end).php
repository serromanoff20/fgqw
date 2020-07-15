<?php 
	
	$typeOrg = $_POST['typeOrg'];
	$shortNameOrg = $_POST['shortNameOrg'];
	$longNameOrg = $_POST['longNameOrg'];
	$Pref = $_POST['Pr'];
	$INN = $_POST['INN'];
	$KPP = $_POST['KPP'];
	$OGRN = $_POST['OGRN'];

	if (!empty($longNameOrg)) {

		$query_toOrganization = "INSERT INTO organization VALUES ('', '$typeOrg', '$shortNameOrg', '$longNameOrg', '$Pref', '$INN', '$KPP', '$OGRN', '', '', '');";
		$result_toEmloyee = mysqli_query($link, $query_toOrganization) or die ('Что-то пошло не так!');
		echo "<div class='classSuccess'>Успешно!</div>";
		
	} else {
		echo "<div class='classError'>Вы не заполнили <b style='color:red'>*</b>необходимые реквезиты !</div>";
	}


?>