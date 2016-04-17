<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acceuil</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- Titre -->
<h1 class="title">Modification des motifs de frais </h1>

<!-- Menu -->
<nav id="nav">
  <ul>
    <li class="current"><a href="index.html">Acceuil</a></li>
    <li><a href="#">oooooooooo</a></li>
    <li><a href="#">oooooooooo</a></li>
    <li><a href="#">tttttttttt</a></li>
    <li><a href="vue/sigin.php">S'inscrire</a></li>
    <li><a href="vue/connect.php">Se Connecter</a></li>
  </ul>
</nav>
<!--  -->



<div class="formModif">
	<div class="entete">
        <p class="pNote">Note de frais des bénévoles</p>
        <div class="Rectangle_1">
            <label class="lab">Année cilile : </label><input type="text" name="annee">
        </div>
	</div>
    <div class="div2">
    	<p class="soussigné">Je sousigné(e) :</p>
        <p class="Nom"> Nom : <input type="text" name="nom"></p>
        <p class="Prenom"> Prenom : <input type="text" name="prenom"></p>
        <p class="Demeur"> Demeurant : </p><input class="ImptDemeur" type="text" name="prenom">
        <p class="renonce"> Certifie renoncer au remboursement des frais ci-dessous et les laisser à l'association :  </p><input class="ImptRenonce" type="text" name="prenom">
        <p class="en_tant_que_don__">en tant que don .</p>
        <p class="Frais_de_déplacement">Frais de déplacement</p>
        <p class="Tarif_kilométrique_appliqué_pour_le_rembourseme">Tarif kilométrique appliqué pour le remboursement : 00 $</p>
        <table class="table">
          <tr>
            <th>Date</th>
            <th>Motif</th>		
            <th>Trajet</th>
            <th>Cout trajet</th>
            <th>Péage</th>
            <th>Repas</th>
            <th>Hébergement</th>
            <th>Total</th>
          </tr>
          <tr>
            <td><input class="ImptTable" type="text" name="prenom"></td>
            <td><input class="ImptTable" type="text" name="prenom"></td>		
            <td><input class="ImptTable" type="text" name="prenom"></td>
            <td><input class="ImptTable" type="text" name="prenom"></td>
            <td><input class="ImptTable" type="text" name="prenom"></td>
            <td><input class="ImptTable" type="text" name="prenom"></td>
            <td><input class="ImptTable" type="text" name="prenom"></td>
            <td></td>
          </tr>
          <tr>
            <td colspan=7 style="text-align:center">Montant total des frais de déplacement :</td>
            <td></td>
          </tr>
        </table>
        <p class="Je_suis_le_représentant_légal_des_adhérents_sui"> Je suis le représentant légal de(s) (l')adhérent(s) suivant(s) :</p>
        <table class="tableAder">
          <tr>
            <th>Nom</th>
            <th>Prenom</th>		
            <th>N° licence</th>
          <tr>
            <td><input class="ImptTable" type="text" name="prenom"></td>
            <td><input class="ImptTable" type="text" name="prenom"></td>		
            <td><input class="ImptTable" type="text" name="prenom"></td>
          </tr>
        </table>
        <p class="MontantTotalDons">Montant total des dons : 000.00 euros</label></p>
        <p class="Pour_bénéficier_du_reçu_de_dons__cette_note_de_">Pour bénéficier du reçu de dons, cette note de frais doit être accompagnée de toutes les justificatifs correspondants</p>
        <p class="A">A :<input type="text" name="nom"></p>
        <p class="Le">Le :<input type="text" name="nom"></p>
        <p class="Signatue_du_bénévole">Signatue du bénévole : <input style="width:290px; height:20px; " type="text" name="nom"></p>
        <div class="Rectangle_12">
        	<p class="Partie_réservée_à_l_association">Partie reservée a l'association</p>
            <p class="NumOrdreReçu">N° d'ordre du Reçu : </p>
            <p class="RemisLe"> Remis le : </p>
            <p class="SignatureTrésorier">Signature du Trésorier : </p>
        </div>   
    </div>    
        
</div>

</body>
</html>