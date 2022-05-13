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
            <th>Prenom</th>
            <th>Email</th>
            <th>CIN</th>
            <th>Phone</th>
            <th>Class</th>
            <th>Matiers</th>
            <th></th>
            <th></th>
          </tr>

          <tr>
            <td>Nasser</td>
            <td>Sandali</td>
            <td>sandali@gmail.com</td>
            <td>SH191020</td>
            <td>0762401604</td>
            <td>2</td>
            <td>Francais</td>
            <td>
            <a class="link" href="#" onclick="openModalEdite()"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
            <td>
              <i class="fa-solid fa-trash-can"></i>
            </td>
          </tr>
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
            <input type="text" class="nom" placeholder="Nom" id="nom">
          </div>
          <div class="input">
            <input type="text" class="prenom" placeholder="Prenom" id="prenom">
          </div>
          <div class="input">
            <input type="text" class="email" placeholder="Email" id="email">
          </div>
          <div class="input">
            <input type="text" class="cin" placeholder="CIN" id="cin">
          </div>
          <div class="input">
            <input type="text" class="phone" placeholder="Phone" id="phone">
          </div>
          <div class="input">
            <input type="text" class="class" placeholder="Class" id="class">
          </div>
        </form>
        <div class="btn_group">
          <button type="submit" onclick="closeModalCreate()">Cancel</button>
          <button type="submit">Add</button>
        </div>
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
            <input type="text" class="nom" placeholder="Nom" id="nom">
          </div>
          <div class="input">
            <input type="text" class="prenom" placeholder="Prenom" id="prenom">
          </div>
          <div class="input">
            <input type="text" class="email" placeholder="Email" id="email">
          </div>
          <div class="input">
            <input type="text" class="cin" placeholder="CIN" id="cin">
          </div>
          <div class="input">
            <input type="text" class="phone" placeholder="Phone" id="phone">
          </div>
          <div class="input">
            <input type="text" class="class" placeholder="Class" id="class">
          </div>
        </form>
        <div class="btn_group">
          <button type="submit" onclick="closeModalEdite()">Cancel</button>
          <button type="submit">Add</button>
        </div>
      </div>
    </div>
  </main>

  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
  <script src="./public/Js/script.js"></script>
</body>
</html>