<?php

	require_once 'mydbCon.php';
	
	if(isset($_POST)){
	
		$id_doc = $_POST['id_doc'];

		$query = "DELETE from docteur WHERE `id` = '$id_doc'";
		
		if (mysqli_query($dbCon, $query)) {
			$msg = 3;
		 } 
		 else {
			$msg = 4;
		 }
	
	}
	  header ("Location: docs.php?msg=".$msg."");
	?>