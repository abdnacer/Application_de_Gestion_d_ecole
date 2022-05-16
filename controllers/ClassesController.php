<?php

class ClassesController{
    public function CountAllClasses(){  
        $parents = classes::CountAll();
        return $parents; 
    }

}