<?php
  if(isset($_POST['insert'])){
    $newParent = new ParentsController();
    $newParent->addParents();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Parents</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
</head>
<body>
<div class="container w-50 mt-5 bg-light bg-card1 p-4">
    <div class="py-1">
      <h1 class="fs-2 fw-bold">Create Parent</h1>
    </div>
    <form method="POST" class="form">
      <div class="mb-3">
        <label for="exampleInputName" class="form-label">Name</label>
        <input type="text" class="form-control shadow-none border-dark nom" id="name" name="Name" aria-describedby="NomHelp">
        <div class="errorNom text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputGenre" class="form-label">Genre</label>
        <select  name="Genre" class="form-select shadow-none border-dark genre" aria-label="Default select example">
          <option></option>
          <option value="Homme">Homme</option>
          <option value="Femme">Femme</option>
        </select>
        <div class="errorGenre text-danger"></div>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputJob" class="form-label">Job</label>
        <select name="Job" class="form-select shadow-none border-dark job" aria-label="Default select example">
          <option></option>
          <option value="Etudiants">Etudiants</option>
          <option value="Parents">Parents</option>
          <option value="Professeurs">Professeurs</option>
        </select>
        <div class="errorJob text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputAdresse" class="form-label">Adresse</label>
        <input type="text" class="form-control shadow-none border-dark adresse" id="adresse" name="Adresse" aria-describedby="NomHelp">
        <div class="errorAdresse text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Phone</label>
        <input type="text" class="form-control shadow-none border-dark phone" id="phone" name="Phone" aria-describedby="NomHelp">
        <div class="errorPhone text-danger"></div>
      </div>

      <a href="Parents" type="submit" class="btn btn-secondary px-3">Cancel</a>
      <button type="submit" name="insert" class="btn btn-dark px-4">Add</button>
    </form>  
  </div>

  <!-- Form Validation de Page Create Etudiant -->
  <script>
    let formEl = document.querySelector('.form')

    let nomEl = document.querySelector('.nom')
    let genreEl = document.querySelector('.genre')
    let jobEl = document.querySelector('.job')
    let adresseEl = document.querySelector('.adresse')
    let phoneEl = document.querySelector('.phone')

    let errorNom = document.querySelector('.errorNom')
    let errorGenre = document.querySelector('.errorGenre')
    let errorJob = document.querySelector('.errorJob')
    let errorAdresse = document.querySelector('.errorAdresse')
    let errorPhone = document.querySelector('.errorPhone')

    formEl.addEventListener('submit', (e) =>  {
        if(nomEl.value == ''){
            e.preventDefault()
            errorNom.textContent = "Name is empty"
        }else{
            errorNom.textContent = ""
        }
        
        if(genreEl.value == ''){
            e.preventDefault()
            errorGenre.textContent = "Genre is empty"
        }else{
            errorGenre.textContent = ""
        }
        
        if(jobEl.value == ''){
            e.preventDefault()
            errorJob.textContent = "Class is empty"
        }else{
            errorJob.textContent = ""
        }
        
        if(adresseEl.value == ''){
            e.preventDefault()
            errorAdresse.textContent = "Adresse is empty"
        }else{
            errorAdresse.textContent = ""
        }
        
        if(phoneEl.value == ''){
            e.preventDefault()
            errorPhone.textContent = "Date is empty"
        }else{
            errorPhone.textContent = ""
        }
    })
  </script>
  
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</boody>
</html>

                