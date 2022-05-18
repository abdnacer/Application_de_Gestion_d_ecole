<?php
$data = new etudiantController();
$etudiants = $data->getAllEtudiants();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbord Students</title>
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
    <div id="page-content-wrapper">
    <?php require_once('nav.php'); ?>

    <!-- Page content-->
    <div class="navbar-light">
    <nav class="navbar navbar-expand-lg pt-3 mb-4">
        <div class="container-fluid">
            <h1 class="fs-2 ps-3">DATA ETUDIANTS</h1>
            <form class="d-flex pe-3">
            <a class="btn btn-outline-success px-5 py-1 bg-dark text-white border-0 shadow-none" type="submit" href="addEtudiants">Add</a>
              <!-- <button class="btn btn-outline-success px-5 py-1 bg-dark text-white border-0" type="submit">Add</button> -->
            </form>
        </div>
    </nav>

    <div class="container-fluid table-responsive">
      <table class="table table-border ">
      <thead>
        <tr class="text-white bg-dark">
          <th scope="col">Nom</th>
          <th scope="col">Email</th>
          <th scope="col">Genre</th>
          <th scope="col">Classe</th>
          <th scope="col">Adresse</th>
          <th scope="col">Date</th>
          <th scope="col">Nom De Parent</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody class="bg-light">
          <?php foreach($etudiants as $getEtudiants):?>
            <tr>
              <td><?php echo $getEtudiants['Nom']?></td>
              <td><?php echo $getEtudiants['Email'] ?></td>
              <td><?php echo $getEtudiants['Genre'] ?></td>
              <td><?php echo $getEtudiants['Classe'] ?></td>
              <td><?php echo $getEtudiants['Adresse'] ?></td>
              <td><?php echo $getEtudiants['Date'] ?></td>
              <td><?php echo $getEtudiants['nom_parent'] ?></td>
              <td class="d-flex fs-4 text-dark border-0 text-end">
                <form action="updateEtudiant" method="POST">
                  <input type="hidden" name="id" value="<?php echo $getEtudiants['id'] ?>">
                  <button class="border-0 bg-white p-0">
                    <i class="bi bi-pencil-square"></i>
                  </button>
                </form>
                <form action="deleteEtudiants" method="POST">
                  <input type="hidden" name="id" value="<?php echo $getEtudiants['id'];?>">
                  <button class="border-0 bg-white p-0">
                    <i class="bi bi-trash-fill ms-3"></i>
                  </button>
                </form>
            </td>
          </tr>
          <?php endforeach ?>
          </tbody>
      </table>
      </div>
    </div>
    </div>
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</body>
</html>