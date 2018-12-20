<?php

$email=$_POST['email'];
$pass=$_POST['password'];
$array=array();



try {
  $conn = new PDO('mysql:host=localhost;dbname=SAP;charset=utf8', 'root', '');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql="SELECT `motdepasse` FROM `candidat` WHERE `adresse`='" .$email."'";
  $res = $conn->prepare($sql);
  
  if ($res->execute() == true) {
  $array=$res->fetch(PDO::FETCH_NUM);


 if( password_verify( $pass, $array[0]))
  
  {
    echo 'bravo';
    header("Location: http://www.google.com");
exit();
  }
  else
  {
	  echo 'spa le bon mdp';
  }
}

}
  catch(PDOException $e)
  {
  echo "Error: " . $e->getMessage();
  }

  $conn = null;
?>