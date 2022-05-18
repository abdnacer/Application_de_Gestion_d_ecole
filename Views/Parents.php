
<?php 
  $data = new ParentsController();
  $parents = $data->getAllParents();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parents</title>
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
        <p>DATA PARENTS</p>
        <div>
          <a href="<?php echo BASE_URL;?>addParents"><button type="button">Add</button>
        </div>
      </div>

      <table class="table">
          <tr class="head_tab">
            <th>Nom Complet</th>
            <th>Genre</th>
            <th>Job</th>
            <th>Adresse</th>
            <th>Phone</th>
            <th></th>
            <th></th>
          </tr>
          <?php foreach($parents as $parent): ?>
          <tr>
            <td><?php echo $parent['Name'] ?></td>
            <td><?php echo $parent['Genre'] ?></td>
            <td><?php echo $parent['Job'] ?></td>
            <td><?php echo $parent['Adresse'] ?></td>
            <td><?php echo $parent['Phone'] ?></td>
            <td>
              <form method="POST" action="updateParents" classe ="mr-1">
                <input type="hidden" name="id" value="<?php echo  $parent['id'];?>">
                <button class="btn btn_sm btn-light" ><i class="fa-solid fa-pen-to-square"></i></button>
              </form>
            </td>
            <td>
            <form method="POST" action="deleteParents" classe ="mr-1">
                <input type="hidden" name="id" value="<?php echo  $parent['id'];?>">
                <button class="btn btn_sm btn-light" > <i class="fa-solid fa-trash-can"></i></button>
              </form>
            </td>
          </tr>
          <?php endforeach;; ?>
      </table>
    </div>

  </main>

  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
  <script src="./public/Js/script.js"></script>
</body>
</html>