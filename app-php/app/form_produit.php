<!DOCTYPE html>
 <html>
    <head>
        <title>Formulaire d'ajouter</title>
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
             <form action="adjout_produit.php" method="POST">
               <fieldset>
                 
                 <div class="form-group">
                   <label for="nom">Ajouter nom du produit</label>
                   <input type="text" class="form-control" name="nom"   placeholder="Entrez le nom du produit">
                 </div>
                 
                 <div class="form-group">
                   <label for="text">Prix</label>
                   <input type="number" class="form-control" name="prix"   placeholder="Prix du produit">
                 </div>
                 <div class="form-group">
                   <label for="text">Stock</label>
                   <input type="number" class="form-control" name="stock"   placeholder="Quantité en stock">
                 </div>               
                 <div class="form-group">
                   <label for="bio">Description</label>
                   <textarea class="form-control"   name="description" rows="3"></textarea>
                 </div>
                 <div class="form-group">
                 <input type="submit" value="Envoyer" class="btn btn-primary">
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