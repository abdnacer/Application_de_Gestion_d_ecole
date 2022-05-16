<?php 
  $data = new ProfesseurController();
  $professeurs = $data->getAllProfesseur();
  if(isset($_POST["submit"])){
        $newProfesseur=$data->AddProfesseur();
      }


?>
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

      <div class="title_dashboard">
        <p>DATA PROFESSEUR</p>
        <div>
        <button type="submit" onclick="openModalCreate()">Add</button>
        </div>
      </div>

      <table class="table">
      <tr class="head_tab">
            <th>Nom</th>
            <th>Genre</th>
            <th>Classe</th>
            <th>Matières</th>
            <th>Phone</th>
            <th></th>
            <th></th>
          </tr>

          <?php foreach ($professeurs as $professeur):?>
          <tr>
            <td><?php echo $professeur["Nom"]?></td>
            <td><?php echo $professeur["Genre"]?></td>
            <td><?php echo $professeur["Classe"]?></td>
            <td><?php echo $professeur["Matiere"]?></td>
            <td><?php echo $professeur["Phone"]?></td>
            <td>
              <form method="post"class="mr-1" action="updateProfesseurs" >
                <input type="hidden" name="id_prof" value="<?php echo $professeur["id_prof"]?>">
                <button class="btn" onclick="openModalEdite()"><i class="fa-solid fa-pen-to-square"></i></button>
              </form>
             
            </td>
            <td>
            <form method="post" class="mr-1" action="deleteProfesseurs">
              <input type="hidden" name="id_prof" value="<?php echo $professeur['id_prof']?>">
              <button>
                  <i class="fa-solid fa-trash-can"></i>
              </button>
              </form>
              
            </td>
          </tr>
      <?php endforeach; ?>
      </table>
    </div>

    <!-- Formulaire De Create -->
    <div class="countainer" id="modal_student_Create">
      <div class="child">
        <div class="title">
          <h1>Create Professeur</h1>
        </div>
        <form method="post" id="form" class="inpt_group">
          <div class="input">
            <input type="text" class="nom" placeholder="Nom" id="nom" name="Nom" >
          </div>
          <div class="input">
            <label for="Genre">Genre:</label>
            <select class = "Genre  form-select form-select-lg" placeholder="Genre" id="Genre" name="Genre">
              <option value="Femme">Femme</option>
              <option value="Homme">Homme</option>
            </select>
          </div>
          <div class="input">
            <label for="Classe">Classe:</label>
            <select class="classe  form-select form-select-lg" placeholder="Classe" id="Classe" name="Classe">
              <option value="1">Classe 1</option>
              <option value="2">Classe 2</option>
              <option value="3">Classe 3</option>
              <option value="4">Classe 4</option>
            </select>
          </div>
          <div class="input">
            <label for="Matieres">Matières:</label>
            <select class="Matieres  form-select form-select-lg" placeholder="Matières" id="Matiere" name="Matiere">
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
          <div class="input">
            <input type="text" class="Phone" placeholder="Phone" id="Phone" name="Phone">
          </div>
          <div class="btn_group">
            <button onclick="closeModalCreate()">Cancel</button>
            <button type="submit" name="submit">Add</button>
          </div>
        </form>
      </div>
    </div>
   
  </main>

  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
  <script src="./public/Js/script.js"></script>
</body>
</html>