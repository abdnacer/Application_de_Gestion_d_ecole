 <?php 
  if(isset($_POST['id_prof'])) { 
      $existProf = new ProfesseurController;
      $professeur = $existProf->getOneProfesseur();
  }
  if(isset($_POST['submit'])){
      $existProf = new ProfesseurController;
      $existProf->UpdateProfesseur();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edite Professeurs</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
</head>
<body>

  <div class="container w-50 mt-5 bg-light bg-card1 p-4">
    <div class="py-1">
      <h1 class="fs-2 fw-bold">Edite Professeur</h1>
    </div>
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputNom" class="form-label">Nom</label>
        <input type="text" value="<?php echo $professeur->Nom;?>" class="form-control shadow-none border-dark" id="nom" name="Nom" aria-describedby="NomHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputGenre" class="form-label">Genre</label>
        <select name="Genre" class="form-select shadow-none border-dark" aria-label="Default select example">
          <option selected>Genre</option>
          <option value="Homme" <?php echo ($professeur->Genre === 'Homme') ? 'selected': '';?>>Homme</option>
          <option value="Femme" <?php echo ($professeur->Genre === 'Femme') ? 'selected': '';?>>Femme</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputClasse" class="form-label">Classe</label>
        <select name="Classe" class="form-select shadow-none border-dark" aria-label="Default select example">
          <option selected>Classe</option>
          <option value="1" <?php echo ($professeur->Classe === '1') ? 'selected': '';?>>1</option>
          <option value="2" <?php echo ($professeur->Classe === '2') ? 'selected': '';?>>2</option>
          <option value="3" <?php echo ($professeur->Classe === '3') ? 'selected': '';?>>3</option>
          <option value="4" <?php echo ($professeur->Classe === '4') ? 'selected': '';?>>4</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputMatiere" class="form-label">Matières</label>
        <select name="Matiere" class="form-select shadow-none border-dark" aria-label="Default select example">
          <option selected>Matières</option>
          <option value="Arabe" <?php echo ($professeur->Matiere === 'Arabe') ? 'selected': '';?>>Arabe</option>
              <option value="Anglais" <?php echo ($professeur->Matiere === 'Angalis') ? 'selected': '';?>>Anglais</option>
              <option value="Chimie" <?php echo ($professeur->Matiere === 'Chimie') ? 'selected': '';?>>Chimie</option>
              <option value="Français" <?php echo ($professeur->Matiere === 'Français') ? 'selected': '';?>>Français</option>
              <option value="Mathematique" <?php echo ($professeur->Matiere === 'Mathematique') ? 'selected': '';?>>Mathematique</option>
              <option value="Philosophie" <?php echo ($professeur->Matiere === 'Philosophie') ? 'selected': '';?>>Philosophie</option>
              <option value="Physique" <?php echo ($professeur->Matiere === 'Physique') ? 'selected': '';?>>Physique</option>
              <option value="svt" <?php echo ($professeur->Matiere === 'svt') ? 'selected': '';?>>Science de vie</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Phone</label>
        <input type="text" name="Phone" value="<?php echo $professeur->Phone;?>" class="form-control shadow-none border-dark" id="professeur">
        <input type="hidden" name="id_prof" value="<?php echo $professeur->id_prof?>">
      </div>

      <button type="submit" class="btn btn-secondary">Cancel</button>
      <button type="submit" name="submit" class="btn btn-dark">Edite</button>
    </form>  
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</body>
</html>