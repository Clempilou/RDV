<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>	
    <title>RDV</title>
    <?php
        session_start();
        include("imports.php");
    ?>
  </head>  
    
<?php
    if(isSet($_SESSION['pseudo'])){
        
    }
    else{
        include("auth.php");   
    }
?>