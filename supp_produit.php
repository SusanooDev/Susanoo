<?php 
require_once('db.php');
$id=$_GET['id'];
$sql_supp="delete from produits where id='$id'";
$exe_supp=mysqli_query($connect, $sql_supp);
header('location:liste_produit.php');
?>