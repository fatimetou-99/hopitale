<?php
if(isset($_POST))
{    
     include 'mydbCon.php';

     $num_emp = $_POST['num_emp'];
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $adr = $_POST['adr'];
     $tel = $_POST['tel'];
     $spc = $_POST['spc'];
     $id_admin = $_POST['id_admin'];
 
     $query = "INSERT INTO docteur (num_emp,nom,prenom,adr,tel,spc,id_admin)
     VALUES ('$num_emp','$nom','$prenom','$adr','$tel','$spc','$id_admin')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } 
     else {
        $msg = 4;
     }

}
  header ("Location: docs.php?msg=".$msg."");
?>