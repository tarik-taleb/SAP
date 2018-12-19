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
       <h1> Contact</h1>
        
        <form action=" " method="post"  autocomplete="on">
            <p> <label for="username" class="iconic user" > Nom <span class="required">*</span></label> <input type="text" name="username" id="username"  required="required" placeholder="Nom"  /> </p>

            <p> <label for="usermail" class="iconic mail-alt"> Adresse E-mail <span class="required">*</span></label> <input type="email" name="usermail" id="usermail" placeholder="Adresse E-mail" required="required"  /> </p>

            <p> <label for="subject" class="iconic quote-alt"> Sujet </label> <input type="text" name="subject" id="subject"  placeholder="Sujet de votre demande" /> </p>

            <p> <label for="message" class="iconic comment"> Message  <span class="required">*</span></label> <textarea placeholder="Description de votre demande"  required="required" ></textarea> </p>

            <p class="indication"> Les champs possédant une <span class="required">*</span> sont obligatoires</p>
            
            <input type="submit" value=" ★  Envoyer !" />     

        </form>     
    </div> 



<div id="footer">
 
    <p>
    S.A.P Recrutement<br>
    </p>
    </div>
</body>


</html>