<?php 
  $data = new ParentsController();
  $nbrParents =$data->CountAllParents();
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbord</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./public/Css/style.css">
</head>
<body>
  <main>
    <?php require_once('Sidebar.php'); ?>

    <div class="nav_part2">
    <?php require_once('nav.php'); ?>

      <div class="title_dash">
        <p>LIVE STATISTICS</p>
      </div>

      <div class="card_dash">
        <div class="card">
          <div>
            <img src="./public/images/prof.png" alt="prof">
          </div>
          <div class="card_con">
            <p>Professeur</p>
            <p><?php echo $nbrParents?></p>
          </div>
        </div>
        
        <div class="card">
          <div>
            <img src="./public/images/prof.png" alt="prof">
          </div>
          <div class="card_con">
            <p>Etudiants</p>
            <p>20</p>
          </div>
        </div>
        
        <div class="card">
          <div>
            <img src="./public/images/prof.png" alt="prof">
          </div>
          <div class="card_con">
            <p>Classes</p>
            <p>20</p>
          </div>
        </div>
      </div>

      <div class="stati">
        <div class="stat1">
          <p>34%</p>
          <p>Homme</p>
        </div>
        
        <div class="stat2">
          <p>66%</p>
          <p>Femelle</p>
        </div>
        
        <div class="stat3">
          <p>54%</p>
          <p>Class</p>
        </div>

      </div>

    </div>
  </main>

  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>


</body>
</html>