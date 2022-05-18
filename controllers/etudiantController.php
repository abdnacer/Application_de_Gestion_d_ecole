<?php
  include('./modles/Etudiants.php');

  class etudiantController{
    public function getAllEtudiants(){
      $etudiants = Etudiants::getAll();
      return $etudiants;
    }
  
    public function addEtudiant(){
      if(isset($_POST['submit'])){
        $data = array(
          'Nom' => $_POST['Nom'],
          'Email' => $_POST['Email'],
          'Genre' => $_POST['Genre'],
          'Classe' => $_POST['Classe'],
          'Adresse' => $_POST['Adresse'],
          'Date' => $_POST['Date'],
          'nom_parent' => $_POST['nom_parent'],
        );
  
        $result = Etudiants::add($data);
        if($result == 'An etudiants has been created in the list'){
          header('location: Etudiants');
        }
        else{
          echo $result;
        }
      }
    }
  }
?>