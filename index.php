<?php
require_once './autoload.php';
require_once './controllers/homeController.php';
require_once './Views/alert.php';

 $home = new homeController();
 $pages = ['dashboard','Etudiants','Parents','Professeur','signIn','updateProfesseurs', 'deleteProfesseurs'];
 if(isset($_SESSION['logged']) && $_SESSION['logged'] === true ){      
        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
            $home->index($page);
            }else {
            include('views/includes/404.php');
            }
         }else{
            $home->index('dashboard');
         }

}else{
    $home->index('signIn');
}
?>