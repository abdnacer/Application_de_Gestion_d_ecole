<?php

  class Etudiants{
    static public function getAll(){
      $stmt = DB::connect()->prepare('SELECT * FROM etudiants');
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt = null;
    }

    static public function add($data){
      $stmt = DB::connect()->prepare('INSERT INTO etudiants (Nom, Email, Genre, Classe, Adresse, Date, nom_parent) 
      VALUES (:Nom, :Email, :Genre, :Classe, :Adresse, :Date, :nom_parent)');
      $stmt->bindParam(':Nom', $data['Nom']);
      $stmt->bindParam(':Email', $data['Email']);
      $stmt->bindParam(':Genre', $data['Genre']);
      $stmt->bindParam(':Classe', $data['Classe']);
      $stmt->bindParam(':Adresse', $data['Adresse']);
      $stmt->bindParam(':Date', $data['Date']);
      $stmt->bindParam(':nom_parent', $data['nom_parent']);

      if($stmt->execute()){
        return 'An etudiants has been created in the list';
      }
      else{
        return 'No etudiants was created in the list';
      }
      $stmt->close();
      $stmt = null;
    }
  }

?>