<?php
 require_once './controllers/homeController.php';

 $home = new homeController();
 $pages = ['home','singIn','dashboard','parent','professor','student'];

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