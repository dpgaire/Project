<?php

include("../model/dbconnection.php");
include("../model/Login_model.php");



$controller=new Controller_Login();
$controller->user_login();


class Controller_Login{
   
    
    public function user_login(){
        if (isset($_POST['login'])){
            
            
            //print_r($_POST);
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $login=new Login_Model();
            $res=$login->fetch($email,$password);
            
            $count=mysqli_num_rows($res);
            
            
            
            if($count>0){
                
                header('location:../dash.php');
                
            }else{
                echo'LOGIN FAILED';
            }
            
            
            

        }
    }
}

?>