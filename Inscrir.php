<!DOCTYPE html public "-//W3C//DTD html 4.01 TRANSITIONAL//EN">
<html>

<head>
    <title>Inscrir</title>
    <meta name="author" content="MIKENO NC">
    <meta name="Keywords" content="Inscrir,Eleves,Effectuer,Enseignant,Isc-Goma">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="EnsStyle.css" type="text/css">
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
<Form name="fInscrir" action="Inscrir.php" method="POST">
<fieldset> 
        <legend>INSCRIR</legend>
    <table align="Center" >
<tr>
    <td><label for IdInscrir="IdInscrir">Identifiant Inscrir</label></td>
    <td><input name="IdInscrir" type="text" size="25" placeholder="Taper le IdInscrir ici svp"/></td>
</tr>
<tr>
    <td><label for MatriculeEleve ="MatriculeEleve">Matricule Eleve </label></td>
    <td><input name="MatriculeEleve" type="text" size="45" placeholder="Votre Matricule Eleve  ici svp!"/></td>
</tr>
<tr>
    <td><label for IdClasse="IdClasse">Identifiant Classe</label></td>
    <td><input name="IdClasse" type="text" size="45" placeholder="Votre Identifiant Classe ici svp!"/></td>
</tr>

<td><label for AnneeScolaire="AnneeScolaire">Annee Scolaire :</label></td>
<td><input name="AnneeScolaire" type="text" size="45" placeholder="Annee Scolaire ici svp!"/></td>
</tr>
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
$IdInscrir=$_POST['IdInscrir'];
$MatriculeEleve=$_POST['MatriculeEleve'];
$IdClasse=$_POST['IdClasse'];
$AnneeScolaire=$_POST['AnneeScolaire'];
//connexion au serveur
$con=mysql_connect("localhost","Delphin","delphin0973084377");
// Select de la BD
mysql_select_db("GestionPerceptionFrais",$con);
// Requette SQL pour l'insertion des données
$req="insert into Inscrir VALUES(0,'$MatriculeEleve','$IdClasse','$AnneeScolaire')";
//Execution de la requête SQL
if (mysql_query($req ,$con)){
    echo"<h2> Enregistrement effectué avec succès</h2><br/>";
    echo"<h3> Vous venez d'enregistrer l'Inscrit suivant:</h3><br/>";
    echo"<h3>IdInscrir:$IdInscrir</h3><br/>"; 
    echo"<h3>MatriculeEleve:$MatriculeEleve</h3><br/>";
    echo"<h3>IdClasse:$IdClasse</h3><br/>";
    echo"<h3>AnneeScolaire:$AnneeScolaire</h3><br/>"; 
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
            $IdInscrir=$_POST['IdInscrir'];
            $MatriculeEleve=$_POST['MatriculeEleve'];
            $IdClasse=$_POST['IdClasse'];
            $AnneeScolaire=$_POST['AnneeScolaire'];
            //connexion au serveur
            $con=mysql_connect("localhost","Delphin","delphin0973084377");
            // Select de la BD
            mysql_select_db("GestionPerceptionFrais",$con);
            //Requete de modification a la base des donnees
            $sqll1="UPDATE Inscrir SET MatriculeEleve='$MatriculeEleve', IdClasse='$IdClasse', AnneeScolaire='$AnneeScolaire' WHERE IdInscrir='$IdInscrir'";
            //Execution de la requete
            if(mysql_query($sqll1,$con))
            {
                echo"<h2>L'inscrit bien modifié</h2>";
            }
            else{
                echo"<h2>Echec de la modification</h2>".mysql_Error();
            }
            //Affichage des information sur la modif
            echo"Vous avez modifié l'inscrit suivant : <br/>";
            echo"IdInscrir: $IdInscrir <br/>";
            echo"MatriculeEleve: $MatriculeEleve <br/>";
            echo"IdClasse: $IdClasse <br/>";
            echo"AnneeScolaire: $AnneeScolaire <br/>";
            mysql_close($con);
        }
        //Programmation supprimer
        if(isset($_POST["btnSupprimer"])){
            $IdInscrir=$_POST['IdInscrir'];
            //Creation de la variable connexion
            $con=mysql_connect("localhost","Delphin","delphin0973084377");
            // Select de la BD
            mysql_select_db("GestionPerceptionFrais",$con);
            // Requette SQL pour l'insertion des données
            $sqll1="DELETE FROM Inscrir WHERE IdInscrir='$IdInscrir'";
            if(mysql_query($sqll1,$con)){
                echo"<h2> L'inscrit Supprimé avec succè</h2>";
            }
            else{
                echo"<h2> Erreur de la suppression </h2>".mysql_error();
            }
            //Affichage des information sur la suppression
            echo"Vous avez supprimé le matricule suivant : <br/>";
            echo"IdInscrir: $IdInscrir <br/>";
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