<?php 
  $data = new ProfesseurController();
  $nbrProfs =$data->CountAllProfs();
  $cls = new ClassesController();
  $nbrClasses =$cls->CountAllClasses();
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbord Admin</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
</head>
<body>
<div class="d-flex" id="wrapper">
    <?php require_once('Sidebar.php'); ?>

  <!-- Page content wrapper-->
  <div id="page-content-wrapper" class="bg-general">
    <?php require_once('nav.php'); ?>

    <nav class="navbar navbar-expand-lg pt-3 ">
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <h1 class="fs-2 mb-4 d-flex align-items-center fw-bold">LIVE STATISTICS</h1>
        </div>
    </nav>

      <div class="card_dash">
        <div class="card">
          <div>
            <img src="./public/images/prof.png" alt="prof">
          </div>
          <div class="card_con">
            <p>Professeur</p>
            <p><?php echo $nbrProfs[0] ?></p>
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
            <p><?php echo $nbrClasses[0] ?></p>
          </div>
        </div>
      </div>
      <div style="display:flex;margin-top:2%;flex-wrap: wrap;">
        <div class="chart" style="width:70%;">
          <canvas id="stat"></canvas>
        </div>
        <div class="chart" style="width:30%;">
          <canvas id="myChart"></canvas>
        </div>
        
      </div>

  </div>
</div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="Public/Js/stat1.js" ></script>
  <script src="Public/Js/stat2.js" ></script>
  
</body>
</html>