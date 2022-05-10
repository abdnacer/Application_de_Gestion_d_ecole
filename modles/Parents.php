<?php


class Parents{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `parents`');
        $stmt->execute();
    }
}