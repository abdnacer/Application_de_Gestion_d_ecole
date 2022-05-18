<?php
     if(isset($_POST['id'])){
        $exitParents = new ParentsController();
        $exitParents->deleteParents();
    }
?>