 <?php
require_once('db.php');
if(isset($_POST['modif'])){
    
$id = $_POST['id'];
$nom=$_POST['nom'];
$prix=$_POST['prix'];
$stock=$_POST['stock'];
$description=$_POST['description'];

$sql=" UPDATE produits SET nom='$nom', prix='$prix', stock='$stock',description='$description' WHERE id='$id'";  

$query=mysqli_query($connect, $sql) ;
header("location:liste_produit.php");
}
?>