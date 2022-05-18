<?php
        if(isset($_POST['id_prof'])){
            $deleteProfesseur = new ProfesseurController();
            $deleteProfesseur->DeleteProfesseur();
        }
?>