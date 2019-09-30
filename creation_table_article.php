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

<!-- creation de la table article et execution -->

<?php

  $sql = CREATE TABLE `articles` (
          `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          `title` VARCHAR(50) NOT NULL,
          `content` VARCHAR( 25 ) NOT NULL ,
          `img` BLOB NOT NULL
)

         $conn->exec($sql);


    ?>
