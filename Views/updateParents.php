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

  <div class="container w-50 mt-5 bg-light bg-card1 p-4">
    <div class="py-1">
      <h1 class="fs-2 fw-bold">Edite Parents</h1>
    </div>
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">Name</label>
        <input type="text" value="<?php echo $parent->Name; ?>" class="form-control shadow-none border-dark" id="name" name="Name" aria-describedby="NomHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputGenre" class="form-label">Genre</label>
        <select name="Genre" class="form-select shadow-none border-dark" aria-label="Default select example">
          <option selected>Genre</option>
          <option value="Homme" <?php echo ($parent->Genre === 'Homme') ? 'selected': '';?>>Homme</option>
          <option value="Femme" <?php echo ($parent->Genre === 'Femme') ? 'selected': '';?>>Femme</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputJob" class="form-label">Job</label>
        <select name="Job" class="form-select shadow-none border-dark" aria-label="Default select example">
          <option selected>Job</option>
          <option value="1" <?php echo ($parent->Job === 'Etudiants') ? 'selected': '';?>>Etudiants</option>
          <option value="2" <?php echo ($parent->Job === 'Parents') ? 'selected': '';?>>Parents</option>
          <option value="3" <?php echo ($parent->Job === 'Professeurs') ? 'selected': '';?>>Professeurs</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleInputAdresse" class="form-label">Adresse</label>
        <input type="text" value="<?php echo $parent->Adresse; ?>" class="form-control shadow-none border-dark" id="adresse" name="Adresse" aria-describedby="NomHelp">
      </div>

      <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Phone</label>
        <input type="text" name="Phone" value="<?php echo $parent->Phone;?>" class="form-control shadow-none border-dark" id="professeur">
        <input type="hidden" name="id" value="<?php echo $parent->id?>">
      </div>

      <a href="Parents" type="submit" class="btn btn-secondary">Cancel</a>
      <button type="submit" name="update" class="btn btn-dark">Edite</button>
    </form>  
  </div>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</boody>
</html>
