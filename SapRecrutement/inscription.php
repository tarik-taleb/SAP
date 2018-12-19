 <!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="contact.css" />
        <title>S.A.P</title>

    </head>

    <body>

    

    <div id="menu">
	    <div id = "menu2">
	        <a href="home.php"><p>S.A.P</p></a>
	        <a href="home.php"><p>Accueil</p></a>
	        <a href="connexion.php"><p>Connexion</p></a>
	        <a href="inscription.php"><p>Inscription</p></a>
	        <a href="contact.php"><p>Contact</p></a>
	    </div>
    </div>
<div id="content">
       <h1> Formulaire d'inscription</h1>
        
       <form method="POST" action="TraitementInscription.php">

        Nom :<input type="text" name ="nom"/>
        Prenom:<input type="text" name="prenom"/>
        email:<input type="email" name="email"/>
        numero:<input type="tel" name="numero"/>
        mot de passe:<input type="password" name="password"/>
        cv:<input type="file" name="cv">
        <input type="submit" value="submit"/>
        </form>
        

            
    </div> 

<div id="footer">
 
    <p>
    S.A.P Recrutement<br>
    </p>
    </div>

</body>

</html>