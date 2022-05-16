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

    public function getOneEtudiants(){
      if(isset($_POST['id'])){
        $data = array(
          'id' => $_POST['id']
        );
        $etudiant = Etudiants::getEtudiant($data); 
        return $etudiant;
      }
    }

    public function updateEtudiant(){
      if(isset($_POST['submit'])){
        $data = array(
          'id' => $_POST['id'],
          'Nom' => $_POST['Nom'],
          'Email' => $_POST['Email'],
          'Genre' => $_POST['Genre'],
          'Classe' => $_POST['Classe'],
          'Adresse' => $_POST['Adresse'],
          'Date' => $_POST['Date'],
          'nom_parent' => $_POST['nom_parent'],
        );
  
        $result = Etudiants::update($data);
        if($result == 'An Etudiants has been Update in the list'){
          header('location: Etudiants');
        }
        else{
          echo $result;
        }
      }
    }

    public function deleteEtudiant(){
      if(isset($_POST['id'])){
        $data['id'] = $_POST['id'];
        $result = Etudiants::delete($data);
        if($result == 'An Etudiant has been Delete in the list'){
          header('location: Etudiants');
        }
        else{
          echo $result;
        }
      }
    }
  }
?>