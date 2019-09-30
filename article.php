<!DOCTYPE html>

<!-- page article -->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>



<h3>NOUVEL ARTICLE</h3>

<?php
  // include("connexion.php");
  // include ("transfert.php");
  // if ( isset($_FILES['fic']) )
  // {
  //     transfert();
  // }
  $title='';
  $content='';
  $fic='';

// a chaque rechargement de page on verifie la condition
  if (!empty($_REQUEST['title']) && !empty($_REQUEST['content']) && !empty($_FILES['fic'])){
    // if (length($_REQUEST['fic'])<40){
      transfert();
    // }
    // else {
    //   echo "Le nom de fichier est trop long";
    //   require('formulaire.php');
    // }
  }
  else {
    if (!empty($_REQUEST['title'])) {
      $title = $_REQUEST['title'];          //on recupere le contenu du champs titre pour ne pas avoir a tout retaper apres avoir cliquer sur send//
    }
    if (!empty($_REQUEST['content'])) {
      $content = $_REQUEST['content'];
    }
    if (!empty($_REQUEST['fic'])) {
      $fic = $_REQUEST['fic'];
    }
    if (isset($_REQUEST['submit'])){
      echo "Merci de remplir tous les champs";
    }

// on appelle le script formulaire//
    require("formulaire.php");
  }

  function transfert() {
    //envoi une image uploadé d un dossier quelconque dans le dossier upload //
    $result = move_uploaded_file($_FILES['fic']['tmp_name'], 'upload/'.$_FILES['fic']['name']);  // on deplace le fichier "$_FILES['fic']['tmp_name']"(notre image) dans le repertoire upload

    if ($result) {    // si il y a l image "$files['fic']['name']" dans le dossier upload
     include("connexion.php");
     $sql =  $conn->prepare( 'INSERT INTO `articles` (title,content,img) VALUES (?, ?, ?)') ;
   }
   else {
     echo 'votre image n\'a pas été uploadé';
   }

// envoi les champs dans la BDD //
     $sql->execute(array($_REQUEST['title'], $_REQUEST['content'], $_FILES['fic']['name']));

       echo 'operation reussi';
  }

?>



  <!-- <div  class="col-sm-6"> -->
    <!-- <form enctype="multipart/form-data" action="#" method="post"> -->

    <!-- </form> -->

    <?php
    //
    // $requete = "SELECT * FROM imagesbis";
    // $exec = mysql_query($requete);
    ?>


  <!-- </div> -->
</div>

</body>
</html>
