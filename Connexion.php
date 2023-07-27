<!DOCTYPE html public "-//W3C//DTD html 4.01 TRANSITIONAL//EN">
<html>

<head>
    <title>CONNEXION</title>
    <meta name="author" content="Etudiants G3 Info/A">
    <meta name="Keywords" content="Etudiants,Cours,Enseignant,Isc-Goma">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <div id="serge">
        <div id="sandra">
            <div class="henry">
                <img src="Image/isclogo.png" alt="Mon_Logo" width="17%" height="65%" align="left"/>
            
             <img src="Image/Bandeau.jpg" alt="Mon_Logo" width="65%" height="55%" align="Center"/>
            
             <img src="Image/isclogo.png" alt="Mon_Logo" width="17%" height="65%" align="right"/>
             <br/><br>
            <hr size="4" color="right"/>
            <a href="Accueil.html"title="Allez à la page d'accueil svp!">Accueil</a>
            <a href="Historiques.html"title="Allez à la page d'historique svp!">Historiques</a>
            <a href="Activites.html"title="Allez à la page d'Activites svp!">Activites</a>
            <a href="Contacts.html"title="Allez nous contacter svp!">Contacts</a>
            <hr size="4" color="right"/>
            </div> 
            <div class="Aline">
            <?php
        // La chaine de connexion
        $con = mysql_connect("localhost","Delphin","delphin0973084377");
        //test de la connexion
        if (!$con){
            echo"<h2> Erreur de connexion </h2> <br/>".mysql_error();
        }
        else
        {
        echo"<h2> Connexion bien établie </h2><br/>";
    }
    //Crearion de BD
    $x = "CREATE DATABASE GestionPerceptionFrais";
    if ( mysql_query($x,$con)){
        echo"<h2> La BD créee avec succes </h2>";
    }
    else  
    {
        echo "<h2> Erreur lors de la creation  de BD </h2><br/>".mysql_error();
    }
    //SELECTION DE LA BD
    mysql_select_db("GestionPerceptionFrais",$con);
    //CREATION DES TABLES
    $t1="Create table Eleve (MatriculeEleve  varchar(8) not null primary key,
       NomEleve varchar(25) not null,
       postnomEleve varchar(25) not null,
       PrenomEleve varchar(25) not null,
       GenreEleve char(25) not null,
       NationaliteEleve char(25) not null,
       QuartierEleve char(25) not null,
        DateNaissance date not null,
       TelephoneEleve varchar(13) not null) ENGINE=InnoDB";
    $t2="create table Classe(
        IdClasse varchar(6) not null primary key,
        Designation varchar(25) not null,
        OptionClasse varchar(25) not null) ENGINE=InnoDB";
    $t3="create table Paiement(
        IdPaiement varchar(7) not null primary key,
        MontantPaiement varchar(60) not null,
        MotifPaiement varchar(20) not null) ENGINE= InnoDB";
    $t4="create table Inscrir(IdInscrir int not null AUTO_INCREMENT primary key,
        MatriculeEleve  varchar(8) not null,
        IdClasse varchar(6) not null,
        AnneeScolaire varchar(10) not null,
        FOREIGN KEY(MatriculeEleve) references Eleve (MatriculeEleve),
        FOREIGN KEY(IdClasse) references Classe (IdClasse))ENGINE=InnoDB";
        
    $t5="create table Effectuer(IdEffectuer int not null AUTO_INCREMENT primary key,
        MatriculeEleve  varchar(8) not null,
        IdPaiement varchar(7) not null,
        DateEffectuer date not null,
        FOREIGN KEY(MatriculeEleve) references Eleve (MatriculeEleve),
        FOREIGN KEY(IdPaiement) references Paiement (IdPaiement))ENGINE=InnoDB";
        // EXECUTION DES TABLE
        if(mysql_query($t1,$con)) {
            echo "<h2> la table Eleve créee avec succés</h2><br/>";
        }
        else
        {
            echo "<h2> Erreur lors de la création de la table Eleve</h2><br/>".mysql_error(); 
        }   

          // EXECUTION DES TABLES
          if(mysql_query($t2,$con)) {
            echo "<h2> la table Classe créee avec succés</h2><br/>";
        }
        else
        {
            echo "<h2> Erreur lors de la création de la table Etudiant</h2><br/>".mysql_error(); 
        }   

          // EXECUTION DES TABLES
          if(mysql_query($t3,$con)) {
            echo "<h2> la table Paiement créee avec succés</h2><br/>";
        }
        else
        {
            echo "<h2> Erreur lors de la création de la table Paiement</h2><br/>".mysql_error(); 
        }  
        
          // EXECUTION DES TABLES
          if(mysql_query($t5,$con)) {
            echo "<h2> la table Effectuer créee avec succés</h2><br/>";
        }
        else
        {
            echo "<h2> Erreur lors de la création de la table Effectuer</h2><br/>".mysql_error(); 
        }  
        
         // EXECUTION DES TABLES
         if(mysql_query($t4,$con)) {
            echo "<h2> la table Inscrir créee avec succés</h2><br/>";
        }
        else
        {
            echo "<h2> Erreur lors de la création de la table Inscrir</h2><br/>".mysql_error(); 
        }  
    // FERMETURE DE LA CONNEXION
    mysql_close($con);
  ?>
 </div>
            <div class="Chanceline">   
           CopyRight &copy by G3 study computer sciences <a href="mailto://hervebihando@gmail.com"title="Allez nous correspondre"><br> hervebihando@gmail.com</a> 
            </div>
        </div>
    </div>
</body>

</html>