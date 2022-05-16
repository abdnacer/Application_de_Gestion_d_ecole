<?php
        if(isset($_POST['id_prof'])){
            echo 'hello';
            $deleteProfesseur = new ProfesseurController();
            $deleteProfesseur->DeleteProfesseur();
        }
?>