<!DOCTYPE html public "-//W3C//DTD html 4.01 TRANSITIONAL//EN">
<html>

<head>
    <title>ELEVE</title>
    <meta name="author" content="Etudiants G3 Info/A">
    <meta name="Keywords" content="Eleves,Effectuer,Enseignant,Isc-Goma">
    <meta charset="UTF-8">
    <Link rel="stylesheet" href="EnsStyle.css">
</head>

<body>
<div id="btn">
            <img src="icons8_Up_52px.png" class="icon">
        </div>
        <script>
            const btn = document.querySelector('#btn');
            btn.addEventListener('click',()=>{
                window.scrollTo({
                    top:0,
                    left:0,
                    behavior: "smooth"
                })

            })
        </script>
<div id = "Header">
        <div class="Menu">
            <ul>
                <li class="title"> <a href="ACTIVITESCOLAIRE.html"><img src="icons8_Back_2.ico" alt="Retour"> Retour la page De Menu</a></li>   
            </ul> 
        </div>
    </div>
           
            <br/>
<Form name="fEleves" action="Eleves.php" method="POST">
    <fieldset> 
        <legend>INSCRIPTION</legend>
    <table align="Center" >
<tr>
    <td><label for MatriculeEleve="MatriculeEleve">Matricule Eleve       :</label></td>
    <td><input name="MatriculeEleve" type="text" size="25" placeholder="Taper le Matricule ici svp"/></td>
</tr>
<tr>
    <td><label for NomEleve=" NomEleve">Nom Eleve           :</label></td>
    <td><input name="NomEleve" type="text" size="45" placeholder="Votre nom ici svp!"/></td>
</tr>
<tr>
    <td><label for postnomEleve="postnomEleve">Postnom Eleve            :</label></td>
    <td><input name="postnomEleve" type="text" size="45" placeholder="Votre PostNom ici svp!"/></td>
</tr>
<tr>
    <td><label for PrenomEleve="PrenomEleve">Prenom Eleve           :</label></td>
    <td><input name="PrenomEleve" type="text" size="45" placeholder="Votre Prenom ici svp!"/></td>
</tr>
<tr>
    <td><label for GenreEleve="GenreEleve">Genre Eleve          :</label></td>
    <td><input name="GenreEleve" type="radio" value="F" checked="checked"/>Feminin
    <input name="GenreEleve" type="radio" value="M"/>Masculin</td>
</tr>

<tr>
    <td><label for NationaliteEleve="NationaliteEleve">Nationalite Eleve            :</label></td>
    <td><input name="NationaliteEleve" type="text" size="45" placeholder="Votre Nationalite ici svp!"/></td>
</tr>

<tr>
    <td><label for QuartierEleve="QuartierEleve">Quartier Eleve         :</label></td>
    <td><input name="QuartierEleve" type="text" size="45" placeholder="Votre Quartier ici svp!"/></td>
</tr>
<tr>
<td><label for DateNaissance="DateNaissance">Date de Naissance      :</label></td>
    <td><input type="date"  name="DateNaissance" size="45" format="ddmmyyyy"/></td>
</tr>

<tr>
    <td><label for TelephoneEleve="TelephoneEleve">Telephone            :</label></td>
    <td><input name="TelephoneEleve" type="text" size="45" placeholder="Votre Num Téléphoque ici svp!"/></td>
</tr>
<tr>
    <td>
        <input type="submit" name="btnEnvoi" value="Enregistrer"/>
        <input type="submit" name="btnModifier" value="Modifier"/>
    </td>
    <td>
    <input type="submit" name="btnSupprimer" value="Supprimer"/>
    <input type="reset" name="btnEffacer" value="Effacer"/>
    </td>
</tr>
    </table>
    </fieldset>
    <?php
    if(isset($_POST["btnEnvoi"])){
//Déclaration des variables
$MatriculeEleve=$_POST['MatriculeEleve'];
$NomEleve=$_POST['NomEleve'];
$postnomEleve=$_POST['postnomEleve'];
$PrenomEleve=$_POST['PrenomEleve'];
$GenreEleve=$_POST['GenreEleve'];
$NationaliteEleve=$_POST['NationaliteEleve'];
$QuartierEleve=$_POST['QuartierEleve'];
$DateNaissance=$_POST['DateNaissance'];
$TelephoneEleve=$_POST['TelephoneEleve'];
//connexion au serveur
$con=mysql_connect("localhost","Delphin","delphin0973084377");
// Select de la BD
mysql_select_db("GestionPerceptionFrais",$con);
// Requette SQL pour l'insertion des données
$req="insert into Eleve VALUES('$MatriculeEleve','$NomEleve','$postnomEleve','$PrenomEleve','$GenreEleve','$NationaliteEleve','$QuartierEleve','$DateNaissance','$TelephoneEleve')";
//Execution de la requête SQL
if (mysql_query($req ,$con)){
    echo"<h2> Enregistrement effectué avec succès</h2><br/>";
    echo"<h3> Vous venez d'enregistrer l'Elève suivant:</h3><br/>";
    echo"<h3>MatriculeEleve:$MatriculeEleve</h3><br/>"; 
    echo"<h3>NomEleve:$NomEleve</h3><br/>";
    echo"<h3>postnomEleve:$postnomEleve</h3><br/>";
    echo"<h3>PrenomEleve:$PrenomEleve</h3><br/>";
    echo"<h3>GenreEleve:$GenreEleve</h3><br/>";
    echo"<h3>NationaliteEleve:$NationaliteEleve</h3><br/>";
    echo"<h3>QuartierEleve:$QuartierEleve</h3><br/>";
    echo"<h3>DateNaissance:$DateNaissance</h3><br/>";
    echo"<h3>TelephoneEleve:$TelephoneEleve</h3><br/>";   
}
else
{
    echo"<h2>Erreur d'Enregistrement </h2><br/>".mysql_error();   
}
        mysql_close($con);
        }
//bouton modifier
        if(isset($_POST["btnModifier"])){
            //Déclaration des variables
            $MatriculeEleve=$_POST['MatriculeEleve'];
            $NomEleve=$_POST['NomEleve'];
            $postnomEleve=$_POST['postnomEleve'];
            $PrenomEleve=$_POST['PrenomEleve'];
            $GenreEleve=$_POST['GenreEleve'];
            $NationaliteEleve=$_POST['NationaliteEleve'];
            $QuartierEleve=$_POST['QuartierEleve'];
            $DateNaissance=$_POST['DateNaissance'];
            $TelephoneEleve=$_POST['TelephoneEleve'];
            //connexion au serveur
            $con=mysql_connect("localhost","Delphin","delphin0973084377");
            // Select de la BD
            mysql_select_db("GestionPerceptionFrais",$con);
            //Requete de modification a la base des donnees
            $sqll1="UPDATE Eleve SET NomEleve='$NomEleve', postnomEleve='$postnomEleve', PrenomEleve='$PrenomEleve', GenreEleve='$GenreEleve', NationaliteEleve='$NationaliteEleve', QuartierEleve='$QuartierEleve', DateNaissance='$DateNaissance', TelephoneEleve=$TelephoneEleve WHERE MatriculeEleve='$MatriculeEleve'";
            //Execution de la requete
            if(mysql_query($sqll1,$con))
            {
                echo"<h2>Eleve bien modifiee</h2>";
            }
            else{
                echo"<h2>Echec de la modification</h2>".mysql_Error();
            }
            //Affichage des information sur la modif
            echo"Vous avez modifié l'élève suivant : <br/>";
            echo"MatriculeEleve: $MatriculeEleve <br/>";
            echo"NomEleve: $MatriculeEleve <br/>";
            echo"postnomEleve: $postnomEleve <br/>";
            echo"PrenomEleve: $PrenomEleve <br/>";
            echo"GenreEleve: $GenreEleve <br/>";
            echo"NationaliteEleve: $NationaliteEleve <br/>";
            echo"QuartierEleve: $QuartierEleve <br/>";
            echo"DateNaissance: $DateNaissance <br/>";
            echo"TelephoneEleve: $TelephoneEleve <br/>";
            mysql_close($con);
        }
        //Programmation supprimer
        if(isset($_POST["btnSupprimer"])){
            $MatriculeEleve=$_POST['MatriculeEleve'];
            //Creation de la variable connexion
            $con=mysql_connect("localhost","Delphin","delphin0973084377");
            // Select de la BD
            mysql_select_db("GestionPerceptionFrais",$con);
            // Requette SQL pour l'insertion des données
            $sqll1="DELETE FROM Eleve WHERE MatriculeEleve='$MatriculeEleve'";
            if(mysql_query($sqll1,$con)){
                echo"<h2> Eleve Supprimé avec succè</h2>";
            }
            else{
                echo"<h2> Erreur de la suppression </h2>".mysql_error();
            }
            //Affichage des information sur la suppression
            echo"Vous avez supprimé le matricule suivant : <br/>";
            echo"MatriculeEleve: $MatriculeEleve <br/>";
            mysql_close();

        }
    
    ?>
          </Form>

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