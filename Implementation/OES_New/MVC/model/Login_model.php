<?php
include('dbconnection.php');
class Login_Model
{
   // public $string;

public function fetch($email,$password){
   
global $conn; 
$query='SELECT * FROM user WHERE email = "'.$email.'" and password = "'.$password.'"';
$con=mysqli_query($conn,$query);
   
return $con;
}
    
    
}
?>

