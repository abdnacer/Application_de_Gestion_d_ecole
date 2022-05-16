<?php

class professeurController{
    public function getAllProfesseur(){
            
        $professeurs = professeurs::getAll();
        return $professeurs; 
    }
    public function getOneProfesseur(){
        if(isset($_POST['id_prof'])){
            $data = array(
                'id_prof'=>$_POST['id_prof']
            );
            $professeurs= professeurs::getProfesseur($data);
            return $professeurs;
        }
       
    }
    public function AddProfesseur(){
         if(isset($_POST["submit"])){
             $data = array(
                 "Nom"=>$_POST["Nom"],
                 "Genre"=>$_POST["Genre"],
                 "Classe"=>$_POST["Classe"],
                 "Matiere"=>$_POST["Matiere"],
                 "Phone"=>$_POST["Phone"]
             );
             $result = professeurs::Add($data);
             if($result == "ok"){

             }else{
                 echo $result;
             }
         }
    }
    public function DeleteProfesseur($data){
        if(isset($_POST['id_prof'])){
            $data = $_POST['id_prof'];
            $result = professeurs::delete($data);
        }if($result == "ok"){

        }else{
            echo $result;
        }
    }


    public function CountAllProfs(){  
        $parents = professeurs::CountAll();
        return $parents; 
    }
}