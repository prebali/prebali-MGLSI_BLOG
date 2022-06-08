<?php
require('connexion.php');
    $sql = "SELECT libelle from `categorie`";
    $res = mysqli_query($link, $sql);
    
    while ($row = mysqli_fetch_assoc($res)) 
    { ?>
      <h1><?php echo $row["titre"];?></h1> <br>
      <p><h2><?php echo $row["contenu"];?></h2></p>
      
      <?php } ?>