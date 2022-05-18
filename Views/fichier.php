<?php
     if(isset($_POST['id'])){
        $exitParents = new ParentsController();
        $parent = $exitParents->getOneParents();
    }else{
      Redirect::to('Parents');
    }

    if(isset($_POST['update'])){
       $exitParents = new ParentsController();
       $exitParents->updateParents();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edite Parents</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
</head>
<body>

  <main>
  <?php require_once('Sidebar.php'); ?>
    <div class="nav_part2">
    <?php require_once('nav.php'); ?>
    <div class="container">
             <h1>Modifer un Parents</h1>
             <form  method="POST">
               <fieldset>
                 <h4>merci de modifier le formulaire suivant:</h4>
                 
                 <div class="form-group">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" value="<?php echo $parent->Name; ?>" id="nom" name="Name">
                 </div>
                 
                 <div class="form-group">
                   <label for="Genre">Genre</label>
                   <input type="text" class="form-control" value="<?php echo $parent->Genre; ?>" id="prenom" name="Genre">
                 </div>
                 
                 <div class="form-group">
                   <label for="Job">Entrez votre Job</label>
                   <input type="text" class="form-control" id="email" value="<?php echo $parent->Job; ?>" name="Job">
                 </div>

                 <div class="form-group">
                   <label for="bio">Entrez votre Adresse</label>
                   <input type="text" class="form-control" value="<?php echo $parent->Adresse; ?>" id="cin" name="Adresse">
                 </div>

                 <div class="form-group">
                   <label for="bio">Entrez votre Phone</label>
                   <input type="text" class="form-control" value="<?php echo $parent->Phone; ?>" id="phone" name="Phone">
                 </div>
                 
                 <div class="col-md-12 text-center py-3">
                 <input type="submit" name="update" class="btn btn-dark" value="Update">
                 <input type="hidden" name="id" value="<?php echo  $parent->id; ?>">
                </div>

               </fieldset>
             </form>
         </div>
    </div>
  </main>
</boody>
</html>
