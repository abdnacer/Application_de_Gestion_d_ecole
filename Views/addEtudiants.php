<?php
  if(isset($_POST['submit'])){
    $data = new etudiantController();
    $data = $data->addEtudiant();
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./public/Css/style.css">
</head>
<body>
  <main>
  <?php require_once('Sidebar.php'); ?>

  <div class="nav_part2">
  <?php require_once('nav.php'); ?>
  
  <div class="content_add">
    <div class="inpt_group">
      <form method="POST">
        <div class="title_Form_Add">
          <p>Create Etudiants</p>
        </div>
        <div class="input">
          <input type="text" name="Nom" placeholder="Nom">
        </div>
        <div class="input">
          <input type="text" name="Email" placeholder="Email">
        </div>
        <div class="input">
            <input type="text" name="Genre" placeholder="Genre" id="Genre">
          </div>
          <div class="input">
            <input type="text" name="Classe" placeholder="Classe" id="Classe">
          </div>
          <div class="input">
            <input type="text" name="Adresse" placeholder="Adresse" id="Adresse">
          </div>
          <div class="input">
            <input type="text" name="Date" placeholder="Date" id="Date">
          </div>
          <div class="input">
            <input type="text" name="nom_parent" placeholder="Nom De Parent" id="nom_parent">
          </div>
          <div class="btn_group">
              <button type="submit">Cancel</button>
              <button type="submit" name="submit">Add</button>
          </div>
      </form>
    </div>
  </div>
  </div>
  </main>

  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
  <script src="./public/Js/script.js"></script>
</body>
</html>