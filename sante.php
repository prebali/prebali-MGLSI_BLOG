<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <title>Actualites Polytechniciennes</title>
  </head>
  
  <body> 
  <div id="conteneur">    
  <h1 id="header"><span>Actualites Polytechniciennes</span></h1></a>
  <nav>
      <ul id="menu">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="sport.php">Sport</a></li>
        <li><a href="sante.php">Sante</a></li>
        <li><a href="education.php">Education</a></li>
        <li><a href="politique.php">Politique</a></li>
      </ul>
    </nav>
    
    <div id="contenu">
<?php
require('connexion.php');
    $sql = "SELECT titre, contenu from `article` where categorie = 2";
    $res = mysqli_query($link, $sql);
    
    while ($row = mysqli_fetch_assoc($res)) 

    { ?>
        <h1><?php echo $row["titre"];?></h1> <br>
        <p><h2><?php echo $row["contenu"];?></h2></p>
        
        <?php } ?>
    
    </div>
  <div><p id="footer">Copiright Prenam BALI</p></div>
  </div>
  </body>
</html>
