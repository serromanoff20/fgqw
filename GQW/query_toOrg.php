<?php 
	
	$query_toOrg = 'SELECT id_organization, short_name FROM organization 
	 	WHERE id_organization>0 ';
	$result_toOrg = mysqli_query($link, $query_toOrg) or die("Ошибка");
	$res = mysqli_fetch_row($result_toOrg);

	

	
?>