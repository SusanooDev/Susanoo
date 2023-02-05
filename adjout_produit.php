<?php 
include("db.php");
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$stock=$_POST['stock'];
$description=$_POST['description'];
$sql_adjout="insert into produits values(null, '$nom', '$prix', '$stock', '$description')";
$query=mysqli_query($connect, $sql_adjout);
header("location:liste_produit.php");
?>