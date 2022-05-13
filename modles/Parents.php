<?php


class parents{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `parents`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function CountAll(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM parents`');
        $stmt->execute();
        $stmt = array_shift($stmt->fetch(PDO::FETCH_NUM));
        return $stmt;
    }
}