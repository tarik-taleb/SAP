<?php
session_start();
include('connexion.inc.php');


$req = $cnx->prepare('SELECT *  FROM utilisateur WHERE id = :id AND mdp = :mdp ');
$req->execute(array(':id'=>$_POST['pseudo'],':mdp'=>$_POST['pass']));

$fin = $req->fetch();
if($fin){
	$_SESSION['id']=$_POST['pseudo'];
	$_SESSION['mdp']=$_POST['pass'];
	echo '<p><a href="https://perso-etudiant.u-pem.fr/~cafidegn/accueil.php"> lien vers le site </a></p>';
}
else{
	echo 'le login et le mdp sont invalides';
	echo '<p><a href="https://perso-etudiant.u-pem.fr/~cafidegn/accueil.html"> lien vers le site </a></p>';
	
}

?>