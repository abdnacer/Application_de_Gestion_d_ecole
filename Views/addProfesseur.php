<?php
  if(isset($_POST["submit"])){
    $data = new ProfesseurController();
    $newProfesseur = $data->AddProfesseur();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Professeur</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="./Public/assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
</head>
<body>
<div class="container w-50 mt-5 bg-light bg-card1 p-4">
    <div class="py-1">
      <h1 class="fs-2 fw-bold">Create Professeur</h1>
    </div>
    <form method="POST" class="form">
      <div class="mb-3">
        <label for="exampleInputNom" class="form-label">Nom</label>
        <input type="text" class="form-control shadow-none border-dark nom" id="nom" name="Nom" aria-describedby="NomHelp">
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
        <label for="exampleInputClasse" class="form-label">Classe</label>
        <select name="Classe" class="form-select shadow-none border-dark classe" aria-label="Default select example">
          <option></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
        <div class="errorClasse text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputMatiere" class="form-label">Mati??res</label>
        <select class="form-select form-select-lg shadow-none border-dark matieres" id="Matiere" name="Matiere">
          <option></option>
          <option value="Arabe">Arabe</option>
          <option value="Anglais">Anglais</option>
          <option value="Chimie">Chimie</option>
          <option value="Fran??ais">Fran??ais</option>
          <option value="Mathematique">Mathematique</option>
          <option value="Philosophie">Philosophie</option>
          <option value="Physique">Physique</option>
          <option value="svt">Science de vie</option>
        </select>
        <div class="errorMatieres text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPhone" class="form-label">Phone</label>
        <input type="text" class="form-control shadow-none border-dark phone" id="phone" name="Phone" aria-describedby="NomHelp">
        <div class="errorPhone text-danger"></div>
      </div>

      <a href="Professeur" type="submit" class="btn btn-secondary px-3 ">Cancel</a>
      <button type="submit" name="submit" class="btn btn-dark px-4">Add</button>
    </form>  
  </div>

    <!-- Form Validation de Page Create Etudiant -->
    <script>
    let formEl = document.querySelector('.form')

    let nomEl = document.querySelector('.nom')
    let genreEl = document.querySelector('.genre')
    let classeEl = document.querySelector('.classe')
    let matieresEl = document.querySelector('.matieres')
    let phoneEl = document.querySelector('.phone')

    let errorNom = document.querySelector('.errorNom')
    let errorGenre = document.querySelector('.errorGenre')
    let errorClasse = document.querySelector('.errorClasse')
    let errorMatieres = document.querySelector('.errorMatieres')
    let errorPhone = document.querySelector('.errorPhone')

    formEl.addEventListener('submit', (e) =>  {
        if(nomEl.value.trim() == ''){
            e.preventDefault()
            errorNom.textContent = "Name is empty"
        }else{
            errorNom.textContent = ""
        }
        
        if(genreEl.value.trim() == ''){
            e.preventDefault()
            errorGenre.textContent = "Genre is empty"
        }else{
            errorGenre.textContent = ""
        }
        
        if(classeEl.value.trim() == ''){
            e.preventDefault()
            errorClasse.textContent = "Classe is empty"
        }else{
            errorClasse.textContent = ""
        }
        
        if(matieresEl.value.trim() == ''){
            e.preventDefault()
            errorMatieres.textContent = "Matieres is empty"
        }else{
            errorMatieres.textContent = ""
        }
        
        // let regexPhone = ^[\+]?[212][-\s\.]?[06][-\s\.]?[0-9]{4,6}$
        if(phoneEl.value.trim() == ''){
            e.preventDefault()
            errorPhone.textContent = "Phone is empty"
        }
        // elseif(!regexPhone.test(phoneEl.value.trim()){
        //     e.preventDefault()
        //     errorPhone.textContent = "Phone no empty sous forme +212 ou 06"
        // }
        else{
            errorPhone.textContent = ""
        }
    })
  </script>
  
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</body>
</html>