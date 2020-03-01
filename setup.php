<?php


// Connexion au serveur MySQL
$id=mysqli_connect('localhost:3306',"root","root") or die("Impossible de se connecter au serveur : localhost:3306");

$resultat=mysqli_query($id, "DROP DATABASE IF EXISTS ProjetInfo");
$resultat=mysqli_query($id, "CREATE DATABASE ProjetInfo");
mysqli_select_db($id, "ProjetInfo") or die("Impossible de selectionner la base : ProjetInfo");

$resultat=mysqli_query($id, "
    CREATE TABLE Personne
        (  
            Personne_ID int(20) not null,
            Mail char(20) not null,
            Password char(100) not null,
            Prenom char(20) not null,
            Nom char(20) not null,
            Adresse  char(20) not null,
            Portable char(20) not null,
            
            primary key(Personne_ID)
        )"
);



$resultat=mysqli_query($id, "
    CREATE TABLE Commande
        (
            Commande_ID int(20) not null,
            Date_Commande int(20) not null,
            status int(20) not null,
            primary key(Commande_ID)
       )"
);


$resultat=mysqli_query($id, "
    CREATE TABLE Produit 
        (      
            Produit_ID int(20) not null,
            Libelle char(20) not null,
            Prix int(20) not null,
            primary key(Produit_ID)
        )"
);

$resultat=mysqli_query($id, "
    CREATE TABLE Restaurant
        (
            Restaurant_ID int(20) not null,
            Nom char(20) not null,
            Adresse char(20) not null,
            `Code Postale` int(10) not null,
            Ville char(20) not null,
            Mail char(40) not null,
            Telephone char(20) not null,
            primary key(Restaurant_ID)
        )"
);

//Création des différents restaurants
$resultat=mysqli_query($id, "
        INSERT INTO Restaurant(Restaurant_ID,Nom,Adresse,`Code Postale`,Ville,Mail,Telephone) VALUES
                                        (
                                        '1',
                                        'Pizza Buffet',
                                        '20 Rue Jean Mermoz',
                                        '54500',
                                        'Vandoeuvre-lès-Nancy',
                                        'mailPizzaBuffet@gmail.com',
                                        '03 83 96 19 17'
                                        )
");
$resultat=mysqli_query($id, "
        INSERT INTO Restaurant(Restaurant_ID,Nom,Adresse,`Code Postale`,Ville,Mail,Telephone) VALUES
                                        (
                                        '2',
                                        'Five Pizza',
                                        '7 Rue de Remich',
                                        '54500',
                                        'Vandoeuvre-lès-Nancy',
                                        'mailFivePizza@gmail.com',
                                        '03 83 56 32 27'
                                        )
");
$resultat=mysqli_query($id, "
        INSERT INTO Restaurant(Restaurant_ID,Nom,Adresse,`Code Postale`,Ville,Mail,Telephone) VALUES
                                        (
                                        '3',
                                        'Regalo Pizza',
                                        '42 Rue Kébler',
                                        '54000',
                                        'Nancy',
                                        'mailRegaloPizza@gmail.com',
                                        '03 83 40 79 34'
                                        )
");
$resultat=mysqli_query($id, "
        INSERT INTO Restaurant(Restaurant_ID,Nom,Adresse,`Code Postale`,Ville,Mail,Telephone) VALUES
                                        (
                                        '4',
                                        'Chez Yassin',
                                        '167 Avenue du Général Leclerc',
                                        '54500',
                                        'Vandoeuvre-lès-Nancy',
                                        'mailChezYassin@gmail.com',
                                        '06 18 89 06 85'
                                        )
");
$resultat=mysqli_query($id, "
        INSERT INTO Restaurant(Restaurant_ID,Nom,Adresse,`Code Postale`,Ville,Mail,Telephone) VALUES
                                        (
                                        '5',
                                        'Mario Kebab',
                                        '4 Rue Aristide Briand',
                                        '54500',
                                        'Vandoeuvre-lès-Nancy',
                                        'mailMarioKebab@gmail.com',
                                        '03 83 56 55 30'
                                        )
");
$resultat=mysqli_query($id, "
    CREATE TABLE Categorie
         (
             Categorie_ID int(20) not null,
             Nom char(20),
             primary key(Categorie_ID)
        )"
);
//Création des différentes catégories
$resultat=mysqli_query($id, "
        INSERT INTO Categorie(Categorie_ID,Nom) VALUES
                                        (
                                        '1',
                                        'Kebab'
                                        )
");
$resultat=mysqli_query($id, "
        INSERT INTO Categorie(Categorie_ID,Nom) VALUES
                                        (
                                        '2',
                                        'Pizzeria'
                                        )
");
$resultat=mysqli_query($id, "
        INSERT INTO Categorie(Categorie_ID,Nom) VALUES
                                        (
                                        '2',
                                        'Fast Food'
                                        )
");
$resultat = mysqli_query($id, " 
    CREATE TABLE Passer
        (   
            Personne_ID int(20) not null,
            Commande_ID int(20) not null, 
            primary key(Personne_ID, Commande_ID)
        )
");
$resultat = mysqli_query($id, " 
    CREATE TABLE Prepare
        (   
            Produit_ID int(20) not null,
            Restaurant_ID int(20) not null, 
            primary key(Produit_ID, Restaurant_ID)
        )
");
$resultat = mysqli_query($id, " 
    CREATE TABLE Appartient
        (   
            Categorie_ID int(20) not null,
            Restaurant_ID int(20) not null, 
            primary key(Categorie_ID, Restaurant_ID)
        )
");
$resultat = mysqli_query($id, " 
    CREATE TABLE Contient
        (   
            Produit_ID int(20) not null,
            Commande_ID int(20) not null, 
            primary key(Produit_ID, Commande_ID)
        )
");

   /*
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
*/

?>