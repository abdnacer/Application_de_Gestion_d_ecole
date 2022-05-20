<?php
  if(isset($_POST['find'])){
    $data = new ProfesseurController();
    $professeurs = $data->findProfesseur();
  }
  else{
    $data = new ProfesseurController();
    $professeurs = $data->getAllProfesseur();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Professeurs</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="./Public/assets/favicon.ico" />
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
              <h1 class="fs-2 ps-3">DATA PROFESSEURS</h1>
              <form class="d-flex pe-3">
              <a class="btn btn-outline-success px-5 py-1 bg-dark text-white border-0 shadow-none" type="submit" href="addProfesseur">Add</a>
              </form>
          </div>
      </nav>

      <div class="container-fluid table-responsive" style="height: 560px; display:block; overflow-y: auto;" id="scroll">
      <table class="table table-border">
        <thead>
          <tr class="text-white bg-dark">
            <th scope="col">Nom</th>
            <th scope="col">Genre</th>
            <th scope="col">Classe</th>
            <th scope="col">Matières</th>
            <th scope="col">Phone</th>
            <th></th>
          </tr>
        </thead>
        <tbody class="bg-light container-fluid" >
            <?php foreach ($professeurs as $professeur):?>
            <tr>
              <td class="name-row"><?php echo $professeur["Nom"]?></td>
              <td><?php echo $professeur["Genre"]?></td>
              <td><?php echo $professeur["Classe"]?></td>
              <td><?php echo $professeur["Matiere"]?></td>
              <td><?php echo $professeur["Phone"]?></td>
              <td class="d-flex fs-4 text-dark border-0 text-end">
                <form method="POST" action="updateProfesseurs" >
                  <input type="hidden" name="id_prof" value="<?php echo $professeur["id_prof"]?>">
                  <button class="border-0 bg-white p-0">
                    <i class="bi bi-pencil-square"></i>
                  </button>
                </form>
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="border-0 bg-white p-0">
                  <i class="bi bi-trash-fill ms-3"></i>
                </button>
              </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
      </div>
      </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Etudiants</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        You Are Sure To Delete
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="deleteProfesseurs" method="POST">
          <input type="hidden" name="id_prof" value="<?php echo $professeur['id_prof']?>">
          <button type="submit" class="border-0 btn btn-dark">
            Delete
          </button>
        </form>
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