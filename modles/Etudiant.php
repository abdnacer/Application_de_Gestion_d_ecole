<?php

  class Etudiant{
    static public function getAll(){
      $stmt = DB::connect()->prepare('SELECT * FROM etudiants');
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt = null;
    }

    static public function searchEtudiant($data){
      $search = $data['search'];
      try {
        $query = 'SELECT * FROM etudiants WHERE Nom LIKE ?';
        $stmt =  DB::connect()->prepare($query);
        $stmt->execute(array('%'.$search.'%'));
        $etudiant = $stmt->fetchAll();
        return $etudiant;
      } catch (PDOException $ex){
        echo "erreur" . $ex->getMessage();
      }
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
        return 'An Etudiant has been created in the list';
      }
      else{
        return 'No etudiants was created in the list';
      }
      $stmt->close();
      $stmt = null;
    }

    static public function getEtudiant($data){
      $id = $data['id'];
      try {
        $query = 'SELECT * FROM etudiants WHERE id = :id';
        $stmt =  DB::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        $etudiant = $stmt->fetch(PDO::FETCH_OBJ);
        return $etudiant;
      } catch (PDOException $ex){
          echo "erreur" . $ex->getMessage();
      }
    }

    static public function update($data){
      $stmt = DB::connect()->prepare('UPDATE etudiants SET Nom = :Nom, Email = :Email, Genre = :Genre, Classe = :Classe,
      Adresse = :Adresse, Date = :Date, nom_parent = :nom_parent WHERE id = :id');
      $stmt->bindParam(':Nom', $data['Nom']);
      $stmt->bindParam(':Email', $data['Email']);
      $stmt->bindParam(':Genre', $data['Genre']);
      $stmt->bindParam(':Classe', $data['Classe']);
      $stmt->bindParam(':Adresse', $data['Adresse']);
      $stmt->bindParam(':Date', $data['Date']);
      $stmt->bindParam(':nom_parent', $data['nom_parent']);
      $stmt->bindParam(':id', $data['id']);
      
      if($stmt->execute()){
        return 'An Etudiant has been Update in the list';
      }
      else{
        return 'No etudiants was Update in the list';
      }
      $stmt->close();
      $stmt = null;
    }

    static public function delete($data){
      $id = $data['id'];
      try {
        $query = 'DELETE FROM etudiants WHERE id = :id';
        $stmt =  DB::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        if($stmt->execute()){
          return 'An Etudiant has been Delete in the list';
        }
        else{
          return 'No Etudiant was Delete in the list';
        }
      } catch (PDOException $ex){
        echo "erreur" . $ex->getMessage();
      }
    }
  }

?>