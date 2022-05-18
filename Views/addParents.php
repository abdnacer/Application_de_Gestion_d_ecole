<?php
  if(isset($_POST['insert'])){
    // echo 'laljjjejejsnszn';
    $newParent = new ParentsController();
    $newParent->addParents();
   }
// else{
//     echo 'fuck off';
//   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parents</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./public/Css/bootstrap.css">
  <link rel="stylesheet" href="./public/Css/style.css">
</head>
<body>

  <main>
  <?php require_once('Sidebar.php'); ?>
    <div class="nav_part2">
    <?php require_once('nav.php'); ?>
    <div class="container">
             <h1>Ajouter un Parents</h1>
             <form  method="POST">
               <fieldset>
                 <h4>merci de remplir le formulaire suivant:</h4>
                 
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" placeholder=" Nom complet" id="nom" name="Name">
                 </div>
                 
                 <div class="form-group">
                   <label for="Genre">Genre</label>
                   <input type="text" class="form-control" placeholder="Genre" id="prenom" name="Genre">
                 </div>
                 
                 <div class="form-group">
                   <label for="Job">Entrez votre Job</label>
                   <input type="text" class="form-control" id="email" placeholder="JOB" name="Job">
                 </div>

                 <div class="form-group">
                   <label for="bio">Entrez votre Adresse</label>
                   <input type="text" class="form-control" placeholder="Adresse" id="cin" name="Adresse">
                 </div>

                 <div class="form-group">
                   <label for="bio">Entrez votre Phone</label>
                   <input type="text" class="form-control" placeholder="Phone" id="phone" name="Phone">
                 </div>

                 <div class="col-md-12 text-center py-3">
                 <input type="submit" name="insert" class="btn btn-dark" value="Insérer">
                </div>
                
               </fieldset>
             </form>
         </div>
    </div>
  </main>
</boody>
</html>

                