<?php

class classes{
    static public function CountAll(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM classes');
        $stmt->execute();
        return $stmt->fetch();
    }
    static public function AllEtd($IdClasse){
        $stmt = DB::connect()->prepare('SELECT COUNT(*) from etudiants E INNER JOIN classes C ON E.Classe=C.id_classe where C.id_classe=:id');
        $stmt->execute(array(':id' => $IdClasse));
        return $stmt->fetch();
    }

}