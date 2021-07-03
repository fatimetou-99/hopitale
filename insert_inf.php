<?php
if(isset($_POST))
{    
     include 'mydbCon.php';

     $num_emp = $_POST['num_emp'];
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $adr = $_POST['adr'];
     $tel = $_POST['tel'];
     $rot = $_POST['rotation'];
     $salaire = $_POST['salaire'];
     $id_admin = $_POST['id_admin'];

 
     $query = "INSERT INTO inf (num_emp,nom,prenom,adr,tel,rotation,salaire,id_service,id_admin)
     VALUES ('$num_emp','$nom','$prenom','$adr','$tel','$rot','$salaire',1,'$id_admin')";
 
     if (mysqli_query($dbCon, $query)) {
        $msg = 1;
     } 
     else {
        $msg = 4;
     }

}
  header ("Location: inf.php?msg=".$msg."");
?>