<?php
 include('../model/dbconnection.php');
 include('../model/Register_model.php');   

$controller=new Controller_Register();
$controller->Send_Value();

class Controller_Register
{

    public function Send_Value(){
         
       //print_r($_POST);
        
       if(isset($_POST['signup'])){
            
//           print_r($_POST);
            
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $collage=$_POST['collage'];
        $email=$_POST['email'];
        $mobile=$_POST['mob'];
        $password=$_POST['password'];
        
        
        $abc=new Model();
        $def=$abc->Insert($name,$gender,$collage,$email,$mobile,$password);
           
           if($def>0){
               header('location:../index.php');
           }
           else{
               echo"NOte";
           }
        
        
        
            
        }
    
        
       
    }
    
}
?>