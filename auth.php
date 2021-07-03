<?php 
session_start(); 
include "mydbCon.php";

if (isset($_POST['login']) && isset($_POST['pass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$login = validate($_POST['login']);
	$pass = validate($_POST['pass']);

	if (empty($login)) {
		header("Location: login.php?error=Login est obligatoire");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Mot de passe est obligatoire");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE login='$login' AND pass='$pass'";

		$result = mysqli_query($dbCon, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['login'] === $login && $row['pass'] === $pass) {
            	$_SESSION['login'] = $row['login'];
            	$_SESSION['pass'] = $row['pass'];
            	$_SESSION['id_admin'] = $row['id_admin'];
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: login.php?error=Login ou mot de passe incorrect");
		        exit();
			}
		}
		else{
			header("Location: login.php?error=Login ou mot de passe incorrect");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}