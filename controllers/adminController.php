<?php

 class AdminController{
    public function auth(){
            if(isset($_POST['submit'])){
                $data['Email'] = $_POST['Email'];
                $result = Admin:: login($data);
               echo  $result->Email;
                if($result->Email === $_POST['Email'] && ($_POST['Password'] == $result->Password)){
                    $_SESSION['logged'] = true;
                    $_SESSION['Email'] = $result->Email;
                    header('location: dashboard');
                }
            else{
               Session::set('error', 'Email ou mot de passe incorrect');
                header('location: signIn');
            
            }
        }
    }
   
 }
?>