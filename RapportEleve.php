<!DOCTYPE html>
<html lang="en">
<head>
<title>LISTE_ELEVE</title>
    <meta name="author" content="Eleve Mikeno">
    <meta name="Keywords" content="Eleve,Classe,Paiement,Mikeno NC">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="EnsStyle.css" type="text/css">
</head>
<body>
<div id = "Header">
        <div class="Menu">
            <ul>
                <li class="title"> <a href="ACTIVITESCOLAIRE.html"><img src="icons8_Back_2.ico" alt="Retour"> Retour la page De Menu</a></li>   
            </ul> 
        </div>
    </div>
            <?php
            //connexion au serveur
$con=mysql_connect("localhost","Delphin","delphin0973084377");
// Select de la BD
mysql_select_db("GestionPerceptionFrais",$con);
// Requette SQL pour la selection des données
$sql="SELECT * From Eleve";
//Execution de la requete
$resultat=mysql_query($sql,$con);
echo'<table bgcolor="#fff" border="2" align="center" width="60%">';
echo'<tr>';//Debut de la ligne
echo'<th>Matricule Eleve</th><th>Nom Eleve</th><th>Prénom Eleve</th><th>Post-Nom Eleve</th>
<th>Genre Eleve</th><th>Nationalité Eleve</th><th>Quartier Eleve</th> <th>Date de Naissance Eleve</th>
<th>Téléphone Eleve</th>';
echo'</tr>';
//Traitement de données
while($row=mysql_fetch_array($resultat)){
    echo'<tr>';
    echo'<td>'.$row['MatriculeEleve'].'</td>';
    echo'<td>'.$row['NomEleve'].'</td>';
    echo'<td>'.$row['postnomEleve'].'</td>';
    echo'<td>'.$row['PrenomEleve'].'</td>';
    echo'<td>'.$row['GenreEleve'].'</td>';
    echo'<td>'.$row['NationaliteEleve'].'</td>';
    echo'<td>'.$row['QuartierEleve'].'</td>';
    echo'<td>'.$row['DateNaissance'].'</td>';
    echo'<td>'.$row['TelephoneEleve'].'</td>';
    echo'</tr>';
}
echo'</table>';//fin du tableau
//liberation des ressources
mysql_free_result($resultat);
//Fermeture de la connexion
mysql_close($con)




                ?>
</body>
<footer>
<div class="Contenu-footer">
        <div class="bloc footer-support">
            <h3>Nos Supports</h3>
            <ul class="liste-support">
                <li> <a href="#">Institution Virtuelle</a> </li>
                <li> <a href="#">Messagerie institutionnelle</a> </li>
                <li> <a href="#">Presses institutionnelle</a> </li>
                 <li> <a href="#">Coopération et partenariat</a> </li>
                <li> <a href="#">Programme National</a> </li>
            </ul>
        </div>
        <div class="blocfooter-joindre">
            <h3>Nous Joindre</h3>
            <ul class="liste-joindre">
                <li> <a href="#"> <img class="Icon" src="icons8_Home_64px.png" width="20px" alt="Home">Building administratif, en face de ISC-GOMA</a> </li>
                <li> <a href="#"><img class="Icon" src="icons8_Envelope_64px.png" width="20px" alt="Mail"> delphindelphin347@gmail.com</a> </li>
                <li> <a href="#"> <img class="Icon" src="icons8_Phone_64px_1.png" width="20px" alt="Telephone"> +243 973 084 377</a> </li>
            </ul>
            <div id="borderpied">
                <ul>
                    <li class="bpied"><a href="#">Facebook</a></li>
                    <li class="bpied"><a href="#">Instagram</a></li>
                    <li class="bpied"><a href="#">Youtube</a></li>
                    <li class="bpied"><a href="#">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyrigth">
        <p>copyrigth 2023 <a href = "#"> @delphindelphin347@gmail</a> comptes. Tous drois réservé</p>
    </div>
</footer>
</html>