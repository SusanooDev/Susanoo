<?php 
//Ajout de la base de donnees
include("db.php");
//Recuperation des champs
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$stock=$_POST['stock'];
$description=$_POST['description'];
//Insertion dans la base de donnees
$sql_adjout="insert into produits values(null, '$nom', '$prix', '$stock', '$description')";
$query=mysqli_query($connect, $sql_adjout);
header("location:liste_produit.php");
?>

