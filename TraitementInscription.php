<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pass=password_hash($pass, PASSWORD_DEFAULT);
$num=$_POST['numero'];
$cv = isset($_POST['cv']) ? $_POST['cv'] : NULL;
$servername = "localhost";
$username = "root";




try {
   //STOCKER LES CV DANS LE DOSSIER ;
   $stockageTemporaire = $_FILES['cv']['tmp_name'];
   $file_name= $_FILES['cv']['name'];
   $dest = 'LesCv/' . $file_name;
   move_uploaded_file($stockageTemporaire , $dest);
  $conn = new PDO('mysql:host=localhost;dbname=SAP;charset=utf8', 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="INSERT INTO candidat(nom, prenom, numero , adresse, cv, motdepasse ) VALUES('$nom', '$prenom', '$num', '$email' , '$dest', '$pass' )";
  $res = $conn->prepare($sql);
  $res->execute();
  echo " Inscription success";
 
}
  catch(PDOException $e)
  {
  echo "Error: " . $e->getMessage();
  }
$conn = null;
?>