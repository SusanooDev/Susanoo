<?php 
include('db.php');
$recup="select * from produits";
$execute=mysqli_query($connect, $recup) ;
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <title>liste_produit</title>
</head>
<body>
    <?php 
    include('header.php');
    ?>

    <table class="table table-striped mt-3">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Détail</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <?php 
   while($row=mysqli_fetch_array($execute)){
       extract($row);
       echo"<tr>
       <td>$id</td>
       <td>$nom</td>
       <td>$prix</td>
       <td><a href='detail.php? id=$id' class='btn btn-secondary'>Détail</a></td>
       <td><a href='fiche_produit.php? id=$id' class='btn btn-primary'>Modifier</a></td>
       <td><a href='supp_produit.php? id=$id' class='btn btn-danger'>Supprimer</a></td>
     </tr>  
       ";
   }
  ?>

</table>
    	<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
<?php
include('footer.php');
?>
</body>
</html>