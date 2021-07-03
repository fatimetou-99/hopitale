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
		$rot = $_POST['rotation'];
		$salaire = $_POST['salaire'];
		$id_inf = $_POST['id_inf'];

		$query = "UPDATE inf SET `num_emp` = '$num_emp', `nom` = '$nom', `prenom` = '$prenom', `adr` = '$adr',`tel` = '$tel', `rotation` = '$rot', `salaire` = '$salaire' WHERE `id_inf` = '$id_inf'";
		if (mysqli_query($dbCon, $query)) {
			$msg = 2;
		 } 
		 else {
			$msg = 4;
		 }
	
	}
	  header ("Location: inf.php?msg=".$msg."");
	?>