<?php


class Professeurs{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `professeurs`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }
    static function getProfesseur($data) { 
        $id_prof = $data["id_prof"];
        try{
            $query="SELECT * FROM professeurs WHERE id_prof = :id_prof";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id_prof"=>$id_prof));
            $professeurs=$stmt->fetch(PDO::FETCH_OBJ);
            return $professeurs;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
    static public function Add($data){
        $stmt = DB::connect()->prepare("INSERT INTO professeurs SET Nom=:Nom, Genre=:Genre, Classe=:Classe, Matiere=:Matiere, Phone=:Phone");
            $stmt->bindParam(":Nom", $data["Nom"]);
			$stmt->bindParam(":Genre", $data["Genre"]);
			$stmt->bindParam(":Classe", $data["Classe"]);
			$stmt->bindParam(":Matiere", $data["Matiere"]);
			$stmt->bindParam(":Phone", $data["Phone"]);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }
     static public function update($data){
        $stmt = DB::connect()->prepare("UPDATE professeurs SET 
                    Nom=:Nom, 
                    Genre=:Genre, 
                    Classe=:Classe, 
                    Matiere=:Matiere, 
                    Phone=:Phone 
            WHERE  id_prof=:id_prof");
            $stmt->bindParam(":Nom", $data["Nom"]);
			$stmt->bindParam(":Genre", $data["Genre"]);
			$stmt->bindParam(":Classe", $data["Classe"]);
			$stmt->bindParam(":Matiere", $data["Matiere"]);
			$stmt->bindParam(":Phone", $data["Phone"]);
            $stmt->bindParam(":id_prof", $data["id_prof"]);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }
    static public function delete($data){
         $id_prof = $data['id_prof'];
        try{
            $query='DELETE FROM professeurs WHERE id_prof = :id_prof';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_prof'=> $id_prof));
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'erreur' .$ex->getMessage();
        } 
    }
}