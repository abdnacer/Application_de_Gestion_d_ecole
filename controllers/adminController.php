<?php

 class AdminController{
    public function auth(){
            if(isset($_POST['submit'])){
                $data['Email'] = $_POST['Email'];
                $result = Admin::login($data);
                if($result->Email === $_POST['Email'] && ($_POST['Password'] == $result->Password)){
                    $_SESSION['logged'] = true;
                    $_SESSION['Email'] = $result->Email;
                    $_SESSION['Nom'] = $result->Nom;
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