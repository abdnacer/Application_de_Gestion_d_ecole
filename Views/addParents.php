<?php
  if(isset($_POST['insert'])){
    $newParent = new ParentsController();
    $newParent->addParents();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Parents</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
</head>
<body>
<div class="container w-50 mt-5 bg-light bg-card1 p-4">
    <div class="py-1">
      <h1 class="fs-2 fw-bold">Create Parent</h1>
    </div>
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">Name</label>
        <input type="text" class="form-control shadow-none border-dark" id="name" name="Name" aria-describedby="NomHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputGenre" class="form-label">Genre</label>
        <select  name="Genre" class="form-select shadow-none border-dark" aria-label="Default select example">
          <option selected>Genre</option>
          <option value="Homme">Homme</option>
          <option value="Femme">Femme</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputJob" class="form-label">Job</label>
        <select name="Job" class="form-select shadow-none border-dark" aria-label="Default select example">
          <option selected>Job</option>
          <option value="Etudiants">Etudiants</option>
          <option value="Parents">Parents</option>
          <option value="Professeurs">Professeurs</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputAdresse" class="form-label">Adresse</label>
        <input type="text" class="form-control shadow-none border-dark" id="adresse" name="Adresse" aria-describedby="NomHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Phone</label>
        <input type="text" class="form-control shadow-none border-dark" id="phone" name="Phone" aria-describedby="NomHelp">
      </div>
      <button type="submit" class="btn btn-secondary px-3">Cancel</button>
      <button type="submit" name="insert" class="btn btn-dark px-4">Add</button>
    </form>  
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</boody>
</html>

                