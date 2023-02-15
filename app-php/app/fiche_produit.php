<?php 
require_once('db.php');

$id=$_GET['id'];
$sql_modif="select * from produits where id='$id'";
$exe_modif=mysqli_query($connect, $sql_modif);
$liste=mysqli_fetch_array($exe_modif);
extract($liste);
?>
<!DOCTYPE html>
 <html>
    <head>
        <title>Formulaire de modification</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
     </head>
     <body>
     <?php
include('header.php');
?>

         <div class="container">
             <form action="modif_produit.php" method="POST">
               <fieldset>
               <input type="hidden" name="id" value="<?= $id ?>">
                 <div class="form-group">
                   <label for="nom">Ajouter nom du produit</label>
                   <input type="text" class="form-control" name="nom"   value="<?php echo"$nom" ?>" placeholder="Entrez le nom du produit">
                 </div>
                 
                 <div class="form-group">
                   <label for="text">Prix</label>
                   <input type="number" class="form-control" name="prix"   value="<?php echo"$prix" ?>" placeholder="Nouveau prix du produit">
                 </div>
                 <div class="form-group">
                   <label for="text">Quantité en stock</label>
                   <input type="number" class="form-control" name="stock"   value="<?php echo"$stock" ?>" placeholder="Quantité en stock">
                 </div>
          
                 <div class="form-group">
                   <label for="bio">Description</label>
                   <textarea class="form-control"    name="description" value="" rows="3"><?php echo"$description" ?></textarea>
                 </div>
                 <div class="form-group">
                 <input type="submit"  value="Modifier" name="modif" class="btn btn-primary">
                 </div>
               </fieldset>
             </form>
         </div>
         <?php
include('footer.php');
?>
         <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    </body>
</html>