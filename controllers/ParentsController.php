<?php

class ParentsController{

    public function getAllParents(){
        
        $parents = Parents::getAll();
        return $parents; 
    }

    public function CountAllParents(){  
        $parents = Parents::CountAll();
        return $parents; 
    }
}