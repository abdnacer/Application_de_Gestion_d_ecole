<?php 
  $data = new professeurController();
  $professeurs = $data->getAllProfesseur();
  if(isset($_POST["submit"])){
        $newProfesseur= new professeurController();
        $newProfesseur->AddProfesseur();
      }
        if(isset($_POST["id_prof"])){
            $existProfesseur= new professeurController;
              $existProfesseur->getOneProfesseur();}
        if(isset($_POST["id_prof"])){
            $deleteProfesseur= new professeurController;
            $deleteProfesseur->DeleteProfesseur();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
              <form method="POST" class="mr-1" >
                <input type="hidden" value="<?php echo $professeur["id_prof"]?>">
                <button onclick="openModalEdite()" class="btn"><i class="fa-solid fa-pen-to-square"></i></button>
              </form>
             
            </td>
            <td>
            <form method="POST" class="mr-1">
              <input type="hidden" value="<?php echo $professeur["id_prof"]?>">
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
            <input type="text" class=" Genre" placeholder="Genre" id="Genre" name="Genre">
          </div>
          <div class="input">
            <input type="text" class="classe" placeholder="Classe" id="Classe" name="Classe">
          </div>
          <div class="input">
            <input type="text" class="Matieres" placeholder="Matiéres" id="Matiere" name="Matiere">
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


    <!-- Formulaire D'edite -->
    <div class="countainer" id="modal_student_Edite">
      <div class="child">
        <div class="title">
          <h1>Edite Professeur</h1>
        </div>
        <form method="post" id="form" class="inpt_group">
          <div class="input">
          <input type="text" class="nom" placeholder="Nom" id="nom" name="Nom" value="<?php echo $professeur["Nom"]?>">
          </div>
          <div class="input">
            <input type="text" class=" Genre" placeholder="Genre" id="Genre" name="Genre" value="<?php echo $professeur["Genre"]?>">
          </div>
          <div class="input">
            <input type="text" class="Matieres" placeholder="Matiéres" id="Classe" value="<?php echo $professeur["Classe"]?>">
          </div>
          <div class="input">
            <input type="text" class="classe" placeholder="Classe" id="classe" name="Matiere" value="<?php echo $professeur["Matiere"]?>">
          </div>
          <div class="input">
            <input type="text" class="Phone" placeholder="Phone" id="Phone" name="Phone" value="<?php echo $professeur["Phone"]?>">
          </div>
        </form>
        <div class="btn_group">
          <button type="submit" onclick="closeModalEdite()">Cancel</button>
          <button type="submit">Update</button>
        </div>
      </div>
    </div>
  </main>

  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
  <script src="./public/Js/script.js"></script>
</body>
</html>