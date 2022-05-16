<?php

class ParentsController{

    public function getAllParents(){
        
        $parents = Parents::getAll();
        return $parents; 
    }
}