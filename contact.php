<?php 
	
	
		$erreurmail =  true;
		$erreur =  true;
		$erreurnom = null;
		$erreurprenom = null;
		$erreurmessage = null;
		$erreuremail = null;
		$statutok = null;
		$statutpasok = null;
		$demande = null;
		$variable = null;
	
	
	
	
if(!empty($_POST)){
	
   
	$nom=addslashes($_POST["nom"]);
	$prenom=addslashes($_POST["prenom"]);
	$message=addslashes($_POST["message"]);
	$email=addslashes($_POST["email"]);
		
		
		if(empty($nom)){
			$erreur = false;
			$erreurnom = 'Merci de remplir le champ Nom';
		}
		if(empty($prenom)){
			$erreur = false;
			$erreurprenom = 'Merci de remplir le champ Prénom';
		}
		if(empty($message)){
			$erreur = false;
			$erreurmessage = 'Merci de remplir le champ Message';
		}
		if(empty($email)){
			$erreur = false;
			$erreuremail = 'Merci de remplir le champ Email';
		}else{
			$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';
			if(preg_match($Syntaxe,$email)){
			}else{
				$erreuremail = 'Merci de saisir une adresse email valide ';
				$erreur = false;
			}
		}
			
		
	 
	if($erreur) {
    
		$headers = 'From: "Nom" <'.$email.'>'."\n";
		
		$contenu="Nom: $nom,\nPrénom: $prenom,\nemail: $email,\nMessage: $message";
		
		if(mail('pmouteau@gmail.com', $headers, $contenu)){
			$statutok = 'Merci pour votre message, nous vous répondrons dans les plus bref délais.';
		}else{
			$statutpasok = 'Un problème est survenu et votre message n\'est pas parti. Veuillez contacter un administrateur.';
		}
	}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact - Les agences AXA Compiégne, Noyon et Thourotte | Meresse&Thonnard</title>
  <meta name="description" content="">
  <link type="text/css" rel="stylesheet" href="Reset.css" media="screen" />
  <link type="text/css" rel="stylesheet" href="style.css" media="screen" />
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/map.js"></script>
</head>
<body>
  <header>
    <div id="header_inner">
      <a href="home.html"><img id="logo_axa" src="../images/logo_axa.png" alt="AXA: réinventons notre métier"/></a>
      <a href="home.html"><img id="logo_meresse" src="../images/logo_meresse.jpg" alt="SARL Méresse et Thonnard" /></a>
    </div>
    <nav id="nav">
      <ul>
        <li><a href="index.html">Accueil</a></li>
        <li><a href="nosvaleurs.html">Nos valeurs</a></li>
        <li><a href="lesagences.html">Les agences</a></li>
        <li><a href="devis.html">Devis</a></li>
        <li><a href="services.html">Nos services</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
    <div id="page">
      <div id="chapeau">
        <div id="img_chapeau"><img src="../images/contact.png" alt="Les agences d'assurance AXA : Compiegne, Noyon, Thourotte"/></div>
        <div id="txt_chapeau"><p>Sur cette page vous pourrez prendre contact avec les agences Méresse-Thonnard.</p></div>
      </div>
	<div id="contact">
        <div id="infos_contact">
          <h1>Informations de contact</h1>
          <p>Adresse : 14 Rue des 3 Barbeaux</p>
          <p>Tel : 03 44 20 20 20</p>
          <p>E-mail : agence.meresse@axa.fr</p>
        </div>
    	<div id="statutenvoiok"><?php echo $statutok; ?></div>
    	<div id="statutenvoipasok"><?php echo $statutpasok; ?></div> 
    	<br /> 
        	<form id="formcontact" method="post" action="contact.php"> 
        		
        		<div class="champ gauche">
	            	<div class="champform"><input type="text" placeholder="Nom" id="champNom" name="nom" size="40" value="<?php if(isset ($_POST["nom"])) echo $_POST["nom"]; ?>" /></div>
	                <div class="erreur"><?php echo $erreurnom;?></div> 
                </div>
                <div class="champ droite">
	                <div class="champform"><input type="text" placeholder="Prénom" id="champPrenom" name="prenom" size="40" value="<?php if(isset ($_POST["prenom"])) echo $_POST["prenom"]; ?>"/></div>
	                <div class="erreur"><?php echo $erreurprenom; ?></div> 
                </div>
                <div class="champ">
	                <div class="champform"><input type="text" placeholder="Email" id="champEmail" name="email" size="40" value="<?php if(isset ($_POST["email"])) echo $_POST["email"]; ?>"/></div>
	                <div class="erreur"><?php echo $erreuremail; ?></div> 
	            </div>
                <div class="champ ">
	                <div class="champform bottom">
	                	<textarea rows="8" placeholder="Votre question" id="message" name="message" cols="47"><?php if(isset ($_POST["message"])) echo $_POST["message"]; ?></textarea></div>
	                <div class="erreur"><?php echo $erreurmessage; ?></div>
	            </div>
                <div id="champform"><input type="submit" value="Envoyer" id="boutonenvoi"/></div> 
            </form> 
    </div>
            
    </div>
</div>
 <footer>
    <ul>
      <li><a href="">A propos</a></li>
      <li><a href="">Plan du site</a></li>
      <li><a href="">Mentions légales</a></li>
    </ul>
  </footer>
</body>
</html>
