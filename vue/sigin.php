<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>inscription</title>
<?php
	if(isset($_POST['submit']))
	{
		$username = htmlspecialchars(trim($_POST['username']));
		$mail = htmlspecialchars(trim($_POST['mail']));
		$numLicence = htmlspecialchars(trim($_POST['numLicence']));
		$ligue = htmlspecialchars(trim($_POST['ligue']));
		$adress = htmlspecialchars(trim($_POST['adress']));
		$password = htmlspecialchars(trim($_POST['password']));
		$repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));
		$ville = htmlspecialchars(trim($_POST['ville']));
		$tel = htmlspecialchars(trim($_POST['tel']));
		$codePostal = htmlspecialchars(trim($_POST['codePostal']));
		$prenom = htmlspecialchars(trim($_POST['prenom']));
		$nom = htmlspecialchars(trim($_POST['nom']));
		
		//******Gestion des erreur lors de la saisie du formulaire*****
		if($username&&$password&&$repeatpassword&&$mail&&$numLicence&&$ligue&&$adress&&$ville&&$tel&&$codePostal&&$nom&&$prenom)
		{
			if(strlen($username)>=4)
			{
				if(filter_var($mail,FILTER_VALIDATE_EMAIL))
				{
					if(strlen($password)>=6)
					{
						if($password == $repeatpassword)
						{
							$password = md5($password);
							mysql_connect('localhost','root','');
							mysql_select_db('dbM2L');
						
							$query = mysql_query("INSERT INTO adherent VALUES('$numLicence','$mail','$username','$nom','$prenom','$password','$ligue','$tel','$adress','$ville','$codePostal')");
						
							die('inscription terminer vous pouver vous <a href="connect.php">connecter<a/>');
						
						}else echo('<h3>le mot de passe n\'est pas identique à la confirmation du mot de passe !</h3>');
					}else echo('<h3>le mot de passe doit contenir au moin 6 caractère !</h3>');
				}else echo('<h3>l\' adresse mail que vous avez entrez n\'est pas valide</h3>');
			}else echo('<h3>le nom d\'utilisateur doit être supérieur a 4 caractère !</h3>');
		}else echo('<h3>Veuillez saisir tous les champs !</h3>');
	}
?>
<div class="inscription-page">
  <div class="form1">
    <h1>Inscription</h1>
    <form method="post" action="sigin.php">
    <p>Votre nom d'utilisateur</p>
    <input type="text" name="username">
    <p>Votre nom</p>
    <input type="text" name="nom">
    <p>Votre prénom</p>
    <input type="text" name="prenom">
    <p>Votre mail</p>
    <input type="text" name="mail"/>
    <p>Votre mot de passe</p>
    <input type="password" name="password"/>
    <p>confirmer votre mot de passe</p>
    <input type="password" name="repeatpassword"/>
    <p>Votre numéro de licence</p>
    <input type="text" name="numLicence"/>
    <p>Votre ligue</p>
    <input type="text" name="ligue"/>
    <p>Votre adresse</p>
    <input type="text" name="adress"/>
    <p>Votre ville</p>
    <input type="text" name="ville"/>
    <p>Votre code postal</p>
    <input type="text" name="codePostal"/>
    <p>Votre numéro de téléphone</p>
    <input type="text" name="tel"/>
    <br/><br/>
    <input type="submit" name="submit" value="Valider"/>
    <br/>
    <br/>
<a href="connect.php">je possède déja un compte</a>
</form>
  </div>
</div>