<?php

class ClassesController{
    public function CountAllClasses(){  
        $cls = classes::CountAll();
        return $cls; 
    }
    public function CountEtdsCls($IdClasse){  
        $cls = classes::AllEtd($IdClasse);
        return $cls; 
    }

}