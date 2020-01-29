<?php
  include("Parametres.php");

  // Connexion au serveur MySQL
  $id=mysqli_connect($host,$user,$pass) or die("Impossible de se connecter au serveur : $host");

  // Suppression / Création / Sélection de la base de données : $base
  $resultat=mysqli_query($id, "DROP DATABASE IF EXISTS $base");
  $resultat=mysqli_query($id, "CREATE DATABASE $base");
  mysqli_select_db($id, $base) or die("Impossible de sélectionner la base : $base");


  // Création de la table BARS
  // Remarque : il est inutile de supprimer la table au préalable,
  //            la base de données venant juste d'être créée
  //            [ mysqli_query($id, "DROP TABLE IF EXISTS BARS;"); ]

  $resultat=mysqli_query($id, "CREATE TABLE BARS 
                         
						 (id_BARS int(20) not null,
						 nom char(20),
						 primary key(id_BARS)
	  	       ) ;");

  // Insertions des 9 matières des bars de Nancy
  $resultat=mysqli_query($id, "INSERT INTO BARS (id_BARS, nom)VALUES ('1','MAC Carthy');");
  $resultat=mysqli_query($id, "INSERT INTO BARS (id_BARS, nom)VALUES ('2','Les Arcades');");
  $resultat=mysqli_query($id, "INSERT INTO BARS (id_BARS, nom)VALUES ('3','La Quincaillerie');");
  $resultat=mysqli_query($id, "INSERT INTO BARS (id_BARS, nom)VALUES ('4','Le Berthom');");
  $resultat=mysqli_query($id, "INSERT INTO BARS (id_BARS, nom)VALUES ('5','Le Gavroche');");
  
  
  $resultat=mysqli_query($id, "CREATE TABLE BIERES 
                         
						 (id_BIERES int(20) not null,
						 nom char(20),
						 prix char(20),
						 primary key(id_BIERES)
	  	       ) ;");

  // Insertions des 9 matières des bières 
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('1','Chouffe','8€');");
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('2','Cuvée des Trolls','7,50€');");
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('3','Paix Dieu','8€');");
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('4','Kriek','6€');");
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('5','Pils','4,50€');");
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('6','Leffe','6€');");
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('7','Triple Karmeliet','7€');");
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('8','Kwak','6,50€');");
  $resultat=mysqli_query($id, "INSERT INTO BIERES (id_BIERES, nom, prix)VALUES ('9','Kasteel','6,50€');");

   $resultat=mysqli_query($id, "CREATE TABLE HAPPYHOUR 
                         
						 (id_HAPPYHOUR int(20) not null,
						 heure char(20),
						 primary key(id_HAPPYHOUR)
	  	       ) ;");
  // Insertions des 3 matières des happy hours
  $resultat=mysqli_query($id, "INSERT INTO HAPPYHOUR (id_HAPPYHOUR, heure)VALUES ('1','17h-20h');");	
  $resultat=mysqli_query($id, "INSERT INTO HAPPYHOUR (id_HAPPYHOUR, heure)VALUES ('2','19h-21h');");
  $resultat=mysqli_query($id, "INSERT INTO HAPPYHOUR (id_HAPPYHOUR, heure)VALUES ('3','20h-22h');");  
  
   $resultat=mysqli_query($id, "CREATE TABLE DIFBIEREBAR
						 (id_BARS int(20) not null,
						 id_BIERES int(20),
						 primary key(id_BARS,id_BIERES)
	  	       ) ;");
			   
   $resultat=mysqli_query($id, "INSERT INTO DIFBIEREBAR(id_BARS,id_BIERES) VALUES
		
		('1','1'),
		('1','2'),
		('1','6'),
		('1','7'),
		('1','9'),
		('2','1'),
		('2','2'),
		('2','4'),
		('2','5'),
		('3','4'),
		('3','5'),
		('3','6'),
		('3','7'),
		('3','9'),
		('4','2'),
		('4','3'),
		('4','5'),
		('4','6'),
		('4','7'),
		('4','8'),
		('4','9'),	
		('5','2'),
		('5','3'),
		('5','7'),
		('5','8'),
		('5','9')
			;");
		
   $resultat=mysqli_query($id, "CREATE TABLE DIFHAPPYHOURBAR
						 (id_BARS int(20) not null,
						 id_HAPPYHOUR int(20),
						 primary key(id_BARS,id_HAPPYHOUR)
	  	       ) ;");
			   
   $resultat=mysqli_query($id, "INSERT INTO DIFHAPPYHOURBAR(id_BARS,id_HAPPYHOUR) VALUES
	
	
		('1','2'),
		('2','1'),		
		('3','3'),
		('4','2')
		    ;");   
?>