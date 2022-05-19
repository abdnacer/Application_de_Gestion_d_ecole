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
        
        <!-- Page content-->
        <div class="container-fluid card-group mt-3 ">
          <div class="card bg-card1 d-flex flex-row me-3 p-3" style="width: 16rem;">
            <img src="./Public/images/prof.png" class="w-25 py-4">
            <div class="ms-4">
              <p class="para fs-3">Professeur</p>
              <p class="card-text fs-2 fw-bold"><?php echo $nbrProfs[0] ?></p>
            </div>
          </div>
          
          <div class="card bg-card1 d-flex flex-row me-3 p-3" style="width: 16rem;">
            <img src="./Public/images/Etudiant.png" class="w-25">
            <div class="ms-4">
                <p class="para fs-3">Etudiants</p>
                <p class="card-text fs-2 fw-bold">120</p>
            </div>
        </div>
        
        <div class="card bg-card1 d-flex flex-row me-3 p-3" style="width: 16rem;">
            <img src="./Public/images/family.png" class="w-25">
            <div class="ms-4">
                <p class="para fs-3">Classes</p>
                <p class="card-text fs-2 fw-bold"><?php echo $nbrClasses[0] ?></p>
            </div>
        </div>
    </div>

    <!-- style="display:flex; margin-top:2%; flex-wrap: wrap;" -->
      <div class="d-flex justify-content-center align-items-center mt-5 flex-wrap px-5">
      <!-- style="width:70%;" -->
        <div class="chart w-50 me-4">
          <canvas id="stat"></canvas>
        </div>
        <!-- style="width:30%;" -->
        <div class="chart w-25 ms-4">
          <canvas id="myChart"></canvas>
        </div>
      </div>
  </div>
</div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="Public/Js/stat1.js" ></script>
  <script src="Public/Js/stat2.js" ></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</body>
</html>