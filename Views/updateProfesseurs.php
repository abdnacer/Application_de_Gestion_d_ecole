<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professeurs</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="../public/Css/bootstrap.css"> -->
  <link rel="stylesheet" href="./public/Css/style.css">
</head>
<body>

  <main>
  <?php require_once('Sidebar.php'); ?>

    <div class="nav_part2">
      <?php require_once('nav.php'); ?>

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

<div>
      <div >
        <div class="title">
          <h1>Edite Professeur</h1>
        </div>
        <form method="post" id="form" class="inpt_group">

          <div class="input">
            <input type="text" class="nom" placeholder="Nom" id="nom" name="Nom" value="<?php echo $professeur->Nom;?>">
          </div>
          <div class="input">
            <label for="Genre">Genre:</label>
            <select class = "Genre  form-select form-select-lg" placeholder="Genre" id="Genre" name="Genre">
              <option value="Femme" <?php echo ($professeur->Genre === 'Femme') ? 'selected': '';?>>Femme</option>
              <option value="Homme" <?php echo ($professeur->Genre === 'Homme') ? 'selected': '';?>>Homme</option>
            </select>
          </div>
          <div class="input">
            <label for="Classe">Classe:</label>
            <select class="classe  form-select form-select-lg" placeholder="Classe" id="Classe" name="Classe" value=''>
              <option value="1" <?php echo ($professeur->Classe === '1') ? 'selected': '';?>>Classe 1</option>
              <option value="2" <?php echo ($professeur->Classe === '2') ? 'selected': '';?>>Classe 2</option>
              <option value="3" <?php echo ($professeur->Classe === '3') ? 'selected': '';?>>Classe 3</option>
              <option value="4" <?php echo ($professeur->Classe === '4') ? 'selected': '';?>>Classe 4</option>
            </select>
          </div>
          <div class="input">
            <label for="Matiere">Matières:</label>
            <select class="Matieres  form-select form-select-lg" placeholder="Matières" id="Matiere" name="Matiere">
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
          <div class="input">
            <input type="text" class="Phone" placeholder="Phone" id="Phone" name="Phone" value="<?php echo $professeur->Phone;?>">
            <input type="hidden" name="id_prof" value="<?php echo $professeur->id_prof?>">
          </div>
          <div class="btn_group">
        <button type="submit" value="Submit" name="submit">Submit</button>
        </form>
        
        </div>
      </div>
    </div>