<?php


class parents{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `parents`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
}