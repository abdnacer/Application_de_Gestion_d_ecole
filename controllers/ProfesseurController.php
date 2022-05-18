<?php

class ProfesseurController{
    public function getAllProfesseur(){
            
        $professeurs = Professeurs::getAll();
        return $professeurs; 
    }
    public function getOneProfesseur(){
        if(isset($_POST['id_prof'])){
            $data = array('id_prof' => $_POST['id_prof'] );
        }
        $professeurs= Professeurs:: getProfesseur($data);
        return $professeurs;
       
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
             $result = Professeurs::Add($data);
             if($result == "ok"){
                header('location: Professeur');
             }else{
                 echo $result;
             }
         }
    }
    public function UpdateProfesseur(){
        if(isset($_POST["submit"])){
            $data = array(
                "id_prof"=>$_POST['id_prof'],
                "Nom"=>$_POST["Nom"],
                "Genre"=>$_POST["Genre"],
                "Classe"=>$_POST["Classe"],
                "Matiere"=>$_POST["Matiere"],
                "Phone"=>$_POST["Phone"]
            );
            $result = Professeurs::update($data);
            if($result == "ok"){
                header('location: Professeur');
            }else{
                echo $result;
            }
        }
   }
    public function DeleteProfesseur(){
        if(isset($_POST['id_prof'])){
            $data['id_prof'] = $_POST['id_prof'];
            $result = Professeurs:: delete($data);
        if($result === "ok"){
            header("location: Professeur");
        }else{
            echo $result;
        }
    }
  }

    public function CountAllProfs(){  
        $parents = professeurs::CountAll();
        return $parents; 
    }

}