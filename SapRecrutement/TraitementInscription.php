<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$pass=$_POST['password'];
$num=$_POST['numero'];
$cv=$_POST['cv'];
$servername = "localhost";
$username = "root";
$password = "";



try {
  $conn = new PDO('mysql:host=localhost;dbname=sap;charset=utf8', 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql="INSERT INTO candidat(nom, prenom, numero , adresse, cv, mot de passe ) VALUES('$nom', '$prenom', '$num', '$email' , '$cv', '$pass')";
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