<meta charset="utf-8"/>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<?php

session_start();

if(isset($_POST['submit']))
{
  $pseudo = htmlspecialchars(trim($_POST['pseudo']));
  $password = htmlspecialchars(trim($_POST['password']));
  
  if(empty($pseudo))
  {
    echo('<h3>Veullez saisire votre pseudo !</h3>');
  }else if(empty($password))
  {
    echo('<h3>Veuillez saisire votre mot de passe !</h3>');
  }else{
  
  mysql_connect('localhost','root','');
  mysql_select_db('dbM2L');
  
  $password = md5($password);
  
  $login = mysql_query("SELECT * FROM adherent WHERE pseudo='$pseudo' OR mail='$pseudo' AND password='$password'");
  $rows = mysql_num_rows($login);
  
  if($rows == 1)
  {
    $_SESSION['pseudo'] = $pseudo;
    header('Location:backend.php');
  }else echo('<h3>nom d\'utilisateur ou mot de passe incorect !</h3>');
  
  
  }
}
?>
<script type="text/javascript">
  /*$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});*/
</script>
<div class="login-page">
  <div class="form">
    <form method="post" action="" class="login-form">
      <input type="text" name="pseudo" placeholder="e-mail ou pseudo"/>
      <input type="password" name="password" placeholder="mot de passe"/>
      <input type="submit" id="connect" name="submit" value="Connexion"/>
      <p class="message">vous ête pas membre? <a href="sigin.php">Créé votre compte</a></p>
    </form>
  </div>
</div>