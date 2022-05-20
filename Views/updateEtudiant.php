<?php
  if(isset($_POST['id'])){
    $exitEtudiant = new etudiantController();
    $etudiant = $exitEtudiant->getOneEtudiants();
  } 
  if(isset($_POST['submit'])){
    $exitEtudiant = new etudiantController();
    $etudiant = $exitEtudiant->updateEtudiant();
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edite Etudiants</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="./Public/assets/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
</head>
<body>
<div class="container w-50 mt-5 bg-light bg-card1 p-4">
    <div class="py-1">
      <h1 class="fs-2 fw-bold">Edite Etudiants</h1>
    </div>
    <form method="POST" class="form">
      <div class="mb-3">
        <label for="exampleInputNom" class="form-label">Nom</label>
        <input type="text" value="<?php echo $etudiant->Nom;?>" class="form-control shadow-none border-dark nom" name="Nom" aria-describedby="NomHelp">
        <div class="errorNom text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Email</label>
        <input type="email" name="Email" value="<?php echo $etudiant->Email;?>" class="form-control shadow-none border-dark email" id="email">
        <div class="errorEmail text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputGenre" class="form-label">Genre</label>
        <select name="Genre" class="form-select shadow-none border-dark genre" aria-label="Default select example">
          <option value="Homme" <?php echo ($etudiant->Genre === 'Homme') ? 'selected': '';?>>Homme</option>
          <option value="Femme" <?php echo ($etudiant->Genre === 'Femme') ? 'selected': '';?>>Femme</option>
        </select>
        <div class="errorGenre text-danger"></div>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputClasse" class="form-label">Classe</label>
        <select name="Classe" class="form-select shadow-none border-dark classe" aria-label="Default select example">
          <option value="1" <?php echo ($etudiant->Classe === '1') ? 'selected': '';?>>1</option>
          <option value="2" <?php echo ($etudiant->Classe === '2') ? 'selected': '';?>>2</option>
          <option value="3" <?php echo ($etudiant->Classe === '3') ? 'selected': '';?>>3</option>
          <option value="4" <?php echo ($etudiant->Classe === '4') ? 'selected': '';?>>4</option>
        </select>
        <div class="errorClasse text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputAdresse" class="form-label">Adresse</label>
        <input type="text" name="Adresse" value="<?php echo $etudiant->Adresse;?>" class="form-control shadow-none border-dark classe" id="adresse">
        <div class="errorAdresse text-danger"></div>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputDate" class="form-label">Date</label>
        <input type="date" name="Date" value="<?php echo $etudiant->Date;?>" class="form-control shadow-none border-dark date" adresse">
        <div class="errorDate text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputPraent" class="form-label">Nom De Parent</label>
        <input type="text" name="nom_parent" value="<?php echo $etudiant->nom_parent;?>" class="form-control shadow-none border-dark nom_parent" id="nom_parent">
        <input type="hidden" name="id" value="<?php echo $etudiant->id ?>">
        <div class="errorNomParent text-danger"></div>
      </div>

      <a href="Etudiants" type="submit" class="btn btn-secondary">Cancel</a>
      <button type="submit" name="submit" class="btn btn-dark">Edite</button>
    </form>  
  </div>

  <!-- Form Validation de Page Create Etudiant -->
  <script>
    let formEl = document.querySelector('.form')

    let nomEl = document.querySelector('.nom')
    let emailEl = document.querySelector('.email')
    let genreEl = document.querySelector('.genre')
    let classeEl = document.querySelector('.classe')
    let adresseEl = document.querySelector('.adresse')
    let dateEl = document.querySelector('.date')
    let NomParentEl = document.querySelector('.nom_parent')

    let errorNom = document.querySelector('.errorNom')
    let errorEmail = document.querySelector('.errorEmail')
    let errorGenre = document.querySelector('.errorGenre')
    let errorClasse = document.querySelector('.errorClasse')
    let errorAdresse = document.querySelector('.errorAdresse')
    let errorDate = document.querySelector('.errorDate')
    let errorNomParent = document.querySelector('.errorNomParent')

    formEl.addEventListener('submit', (e) =>  {
        if(nomEl.value == ''){
            e.preventDefault()
            errorNom.textContent = "Name is empty"
        }else{
            errorNom.textContent = ""
        }

        let regexEmail =  /^[A-Za-z0-9_-]{4,}@[a-z]{4,10}[.]{1}[a-z]{3,4}$/;
        if(emailEl.value.trim() == ''){
          e.preventDefault();
          errorEmail.textContent = 'email is empty';
          emailEl.style.border = '1px solid red'
        }
        else if(!regexEmail.test(emailEl.value.trim())){
          e.preventDefault()
          errorEmail.textContent = 'Email no empty sous forme example@email.com'
          emailEl.style.border = '1px solid red'
        }
        else{
          errorEmail.textContent = ''
          emailSignup.style.border = ''
        }
        
        if(genreEl.value == ''){
            e.preventDefault()
            errorGenre.textContent = "Email is empty"
        }else{
            errorGenre.textContent = ""
        }
        
        if(classeEl.value == ''){
            e.preventDefault()
            errorClasse.textContent = "Email is empty"
        }else{
            errorClasse.textContent = ""
        }
        
        if(adresseEl.value == ''){
            e.preventDefault()
            errorAdresse.textContent = "Email is empty"
        }else{
            errorAdresse.textContent = ""
        }
        
        if(dateEl.value == ''){
            e.preventDefault()
            errorDate.textContent = "Email is empty"
        }else{
            errorDate.textContent = ""
        }
        
        if(NomParentEl.value == ''){
            e.preventDefault()
            errorNomParent.textContent = "Email is empty"
        }else{
            errorNomParent.textContent = ""
        }
    })
  </script>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="./Public/Js/scripts.js"></script>
</body>
</html>