<?php
  if(isset($_POST['id'])){
    $exitEtudiant = new etudiantController();
    $exitEtudiant->deleteEtudiant();
  }
?>