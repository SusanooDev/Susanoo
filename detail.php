<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
     <title>Détail</title>
 </head>
 <body>
     <?php 
include('header.php');
     ?>
     <?php 
 require_once('db.php');
 $produit=$_GET['id'];
 $sql="select * from produits where id='$produit'";
 $exe=mysqli_query($connect, $sql);
 while($row=mysqli_fetch_array($exe)){
     $id=$row['id'];
     $nom=$row['nom'];
     $prix=$row['prix'];
     $stock=$row['stock'];
     $description=$row['description'];
echo'
<div class="cardy-body">
<div class="form-row">
<label for="" class="col-md-2">ID</label>
<div class="col-md-4">
<p><h5 class="product-name">'.$row['id'].'</h5></p>
</div>
</div>
<div class="form-row">
<label for="" class="col-md-2">Nom de produit</label>
<p><h5 class="product-name">'.$row['nom'].'</h5></p>
<div class="col-md-4">
</div>
</div>
<div class="form-row">
<label for="" class="col-md-2">Prix</label>
<p><h5 class="product-name">'.$row['prix'].'</h5></p>
<div class="col-md-4">
</div>
</div>
<div class="form-row">
<label for="" class="col-md-2">Quantité en stock</label>
<p><h5 class="product-name">'.$row['stock'].'</h5></p>
<div class="col-md-4">
</div>
</div>
<div class="form-row">
<label for="" class="col-md-2">Description</label>
<p><h5 class="product-name">'.$row['description'].'</h5></p>
<div class="col-md-4">
</div>
</div>
</div>';
 }
 ?>
 <?php
include('footer.php');
?>
 <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    
 </body>
 </html>