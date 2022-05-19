<?php
  if(isset($_POST["submit"])){
    $data = new ProfesseurController();
    $newProfesseur = $data->AddProfesseur();
  }
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Etudiants</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
</head>
<body>
<div class="container w-50 mt-5 bg-light bg-card1 p-4">
    <div class="py-1">
      <h1 class="fs-2 fw-bold">Create Professeur</h1>
    </div>
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputNom" class="form-label">Nom</label>
        <input type="text" class="form-control shadow-none border-dark" id="nom" name="Nom" aria-describedby="NomHelp">
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
        <label for="exampleInputClasse" class="form-label">Classe</label>
        <select name="Classe" class="form-select shadow-none border-dark" aria-label="Default select example">
          <option selected>Classe</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputMatiere" class="form-label">Matières</label>
        <select class="form-select form-select-lg shadow-none border-dark" id="Matiere" name="Matiere">
        <option selected>Matières</option>
          <option value="Arabe">Arabe</option>
          <option value="Anglais">Anglais</option>
          <option value="Chimie">Chimie</option>
          <option value="Français">Français</option>
          <option value="Mathematique">Mathematique</option>
          <option value="Philosophie">Philosophie</option>
          <option value="Physique">Physique</option>
          <option value="svt">Science de vie</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Phone</label>
        <input type="text" class="form-control shadow-none border-dark" id="phone" name="Phone" aria-describedby="NomHelp">
      </div>
      <a href="Professeur" type="submit" class="btn btn-secondary px-3 ">Cancel</a>
      <button type="submit" name="submit" class="btn btn-dark px-4">Add</button>
    </form>  
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</body>
</html>