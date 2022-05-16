<?php

class classes{
    static public function CountAll(){
        $stmt = DB::connect()->prepare('SELECT count(*) FROM classes');
        $stmt->execute();
        return $stmt->fetch();
    }

}