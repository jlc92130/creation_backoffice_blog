
<!-- connexion a la BDD db_startuprr -->
  <?php
$servername = "localhost";
$username = "root";
$password = "";

try {
   $conn = new PDO("mysql:host=$servername;dbname=db_startuprr", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>

<!-- creation de la table images et execution -->

<?php

  $sql = CREATE TABLE `images` (
          `img_id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          `img_nom` VARCHAR(50) NOT NULL,
          `img_taille` VARCHAR( 25 ) NOT NULL ,
          `img_type` VARCHAR( 25 ) NOT NULL ,
          `img_desc` VARCHAR( 100 ) NOT NULL ,
          `img_blob` BLOB NOT NULL
)

         $conn->exec($sql);


    ?>
