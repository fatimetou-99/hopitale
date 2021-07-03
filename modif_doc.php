<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

	require_once 'mydbCon.php';
	
	if(isset($_POST)){
		$num_emp = $_POST['num_emp'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$adr = $_POST['adr'];
		$tel = $_POST['tel'];
		$spc = $_POST['spc'];
		$id_doc = $_POST['id_doc'];

		$query = "UPDATE docteur SET `num_emp` = '$num_emp', `nom` = '$nom', `prenom` = '$prenom', `adr` = '$adr',`tel` = '$tel', `spc` = '$spc' WHERE `id` = '$id_doc'";
		if (mysqli_query($dbCon, $query)) {
			$msg = 2;
		 } 
		 else {
			$msg = 4;
		 }
	
	}
	  header ("Location: docs.php?msg=".$msg."");
	?>