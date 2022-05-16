<?php


class professeurs{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `professeurs`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }
    function getProfesseur($data) { 
        $id = $data["id_prof"];
        try{
            $query="SELECT * FROM professeurs WHERE id_prof = :id_prof";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id_prof"=>$id));
            $professeurs=$stmt->fetch(PDO::FETCH_OBJ);
            return $profeseurs;
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
        $stmt = DB::connect()->prepare("UPDATE professeurs SET Nom=:Nom, Genre=:Genre, Classe=:Classe, Matiere=:Matiere, Phone=:Phone, id_prof=:id");
            $stmt->bindParam(":Nom", $data["Nom"]);
			$stmt->bindParam(":Genre", $data["Genre"]);
			$stmt->bindParam(":Classe", $data["Classe"]);
			$stmt->bindParam(":Matiere", $data["Matiere"]);
			$stmt->bindParam(":Phone", $data["Phone"]);
            die(print_r($data));
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }
    static public function delete($data){
        $id = $data["id_prof"];
        try{
            $query="DELETE FROM professeurs WHERE id_prof = :id_prof";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id_prof"=>$id));
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }

    static public function CountAll(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM professeurs');
        $stmt->execute();
        return $stmt->fetch();
    }
}