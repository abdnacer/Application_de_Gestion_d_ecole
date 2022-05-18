<?php

class ParentsController{

    public function getAllParents(){
        
        $parents = parents::getAll();
        return $parents; 
    }

    public function getOneParents(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
        }
        $parent = parents::getParents($data);
        return $parent;
    }
    public function addParents(){
        if(isset($_POST['insert'])){
            $data = array(
                'Name'    => $_POST['Name'],
                'Genre'   => $_POST['Genre'],
                'Job'     => $_POST['Job'],
                'Adresse' => $_POST['Adresse'],
                'Phone'   => $_POST['Phone'],
            );
            $result = parents::add($data);
            if($result === 'ok'){
                Redirect::to('Parents');  
            }else{
                echo $result;
            }
        }
    }


    public function updateParents(){
        if(isset($_POST['update'])){
            $data = array(
                'id'      => $_POST['id'],
                'Name'    => $_POST['Name'],
                'Genre'   => $_POST['Genre'],
                'Job'     => $_POST['Job'],
                'Adresse' => $_POST['Adresse'],
                'Phone'   => $_POST['Phone'],
            );
            $result = parents::update($data);
            if($result === 'ok'){
                Redirect::to('Parents');
            }else{
                echo $result;
            }
        }
    }


    public function deleteParents(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = parents::delete($data);
        
            if($result === 'ok'){
                Redirect::to('Parents'); 
            }else{
                echo $result;
            }
    }
 }
}