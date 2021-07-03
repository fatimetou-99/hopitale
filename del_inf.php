<?php

	require_once 'mydbCon.php';
	
	if(isset($_POST)){
	
		$id_inf= $_POST['id_inf'];

		$query = "DELETE from inf WHERE `id_inf` = '$id_inf'";
		
		if (mysqli_query($dbCon, $query)) {
			$msg = 3;
		 } 
		 else {
			$msg = 4;
		 }
	
	}
	  header ("Location: inf.php?msg=".$msg."");
	?>