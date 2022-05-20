<?php


class parents{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `parents`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }

    static public function searchParents($data){
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM parents WHERE Name LIKE ?';
            $stmt =  DB::connect()->prepare($query);
            $stmt->execute(array('%'.$search.'%'));
            $parent = $stmt->fetchAll();
            return $parent;
        } catch (PDOException $ex){
            echo "erreur" . $ex->getMessage();
        }
    }

    static public function getParents($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM `parents` WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            $parent = $stmt->fetch(PDO::FETCH_OBJ);
            return $parent;

        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO `parents` (Name,Genre,Job,Adresse, Phone) VALUES (:Name,:Genre,:Job,:Adresse,:Phone)');
        // $stmt->bindParam(':id',     $data['id ']);
        $stmt->bindParam(':Name',   $data['Name']);
        $stmt->bindParam(':Genre',  $data['Genre']);
        $stmt->bindParam(':Job',    $data['Job']);
        $stmt->bindParam(':Adresse',$data['Adresse']);
        $stmt->bindParam(':Phone',  $data['Phone']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
    }

    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE`parents` SET 
                Name=:Name,
                Genre=:Genre,
                Job=:Job,
                Adresse=:Adresse,
                Phone=:Phone 
                WHERE id= :id');
        $stmt->bindParam(':Name',   $data['Name']);
        $stmt->bindParam(':Genre',  $data['Genre']);
        $stmt->bindParam(':Job',    $data['Job']);
        $stmt->bindParam(':Adresse',$data['Adresse']);
        $stmt->bindParam(':Phone',  $data['Phone']);
        $stmt->bindParam(':id',     $data['id']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
    }


    static public function delete($data){
        $id= $data['id']; 
        try{
            $query = 'DELETE FROM `parents` WHERE id= :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id' => $id));
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function CountFemme(){
        $stmt = DB::connect()->prepare("SELECT count(*) FROM parents WHERE Genre='Femme'");
        $stmt->execute();
        return $stmt->fetch();
      }
      static public function CountHomme(){
        $stmt = DB::connect()->prepare("SELECT count(*) FROM parents WHERE Genre='Homme'");
        $stmt->execute();
        return $stmt->fetch();
      }
}