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



<h3>ARTICLE</h3>

<?php
         include ("transfert.php");
         if ( isset($_FILES['fic']) )
         {
             transfert();
         }
      ?>

<div class="row">
  <div class="container, col-sm-6">
    <form action="/action_page.php">

      <label for="fname">TITLE</label>
      <input type="text" id="fname" name="firstname">

      <label for="subject">CONTENT</label>
      <textarea id="subject" name="subject" placeholder="" style="height:200px"></textarea>

      <label for="fname">IMAGE</label>
      <textarea id="subject" name="subject"  style="height:200px"></textarea>
    </form>
  </div>
  <div  class="col-sm-6">
    <form enctype="multipart/form-data" action="#" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="800000" />    <!--taile maxi de l image 0.8 Mo  -->
      <input type="file" name="fic" size=50 />
      <input type="submit" value="send" />
    </form>

    <p><a href="liste.php">Liste</a></p>
  </div>
</div>

</body>
</html>
