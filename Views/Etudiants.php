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
        <p>DATA ETUDIANTS</p>
        <div>
          <a href="addEtudiants">Add</a>
          <!-- <button type="submit">Add</button> -->
        </div>
      </div>

      <table class="table">
          <tr class="head_tab">
            <th>Nom</th>
            <th>Email</th>
            <th>Genre</th>
            <th>Classe</th>
            <th>Adresse</th>
            <th>Date</th>
            <th>Nom De Parent</th>
            <th></th>
            <!-- <th></th> -->
          </tr>
          <?php foreach($etudiants as $getEtudiants):?>
            <tr>
              <td><?php echo $getEtudiants['Nom']?></td>
              <td><?php echo $getEtudiants['Email'] ?></td>
              <td><?php echo $getEtudiants['Genre'] ?></td>
              <td><?php echo $getEtudiants['Classe'] ?></td>
              <td><?php echo $getEtudiants['Adresse'] ?></td>
              <td><?php echo $getEtudiants['Date'] ?></td>
              <td><?php echo $getEtudiants['nom_parent'] ?></td>
              <td class="link">
                <form action="updateEtudiant" method="POST">
                  <input type="hidden" name="id" value="<?php echo $getEtudiants['id'] ?>">
                  <button class="butun"><i class="fas fa-edit"></i></button>
                </form>
                <form action="deleteEtudiants" method="POST">
                  <input type="hidden" name="id" value="<?php echo $getEtudiants['id'];?>">
                  <button ><i class="fas fa-trash"></i></button>
                </form>
            </td>
          </tr>
          <?php endforeach ?>
      </table>
    </div>
  </main>

  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
  <script src="./public/Js/script.js"></script>
</body>
</html>