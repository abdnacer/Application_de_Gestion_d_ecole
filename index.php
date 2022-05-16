<?php
require_once './autoload.php';
/*
$stmt = DB::connect()->prepare("UPDATE professeurs SET 
Nom='omar', 
Genre='test', 
Classe='test', 
Matiere='test', 
Phone='test' 
WHERE  id_prof='20'");
$r=$stmt->execute();
 var_dump($r);
exit();
*/
require_once './controllers/homeController.php';


 $home = new homeController();

 $pages = ['dashboard','Etudiants','Parents','Professeur','signIn','updateProfesseurs', 'deleteProfesseurs','addEtudiants', 'updateEtudiant', 'deleteEtudiants'];



 if(isset($_GET['page'])){
     if(in_array($_GET['page'],$pages)){
         $page = $_GET['page'];
         $home->index($page);
     }
     else {
         include('views/includes/404.php');
     }
}
     else{
         $home->index('dashboard');
     }
 
//$home->index('home');
 

 ?>