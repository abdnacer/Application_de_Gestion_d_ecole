<?php

class Admin{
    static function login($data) { 
        $Email = $data["Email"];
        try{
            $query="SELECT * FROM administrateur WHERE Email = :Email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":Email"=>$Email));
            $Admins = $stmt->fetch(PDO::FETCH_OBJ);
            return $Admins;
            if($stmt->execute()){
                return "oki";
        } 
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }

  }
?>