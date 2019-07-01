<?php
include('dbconnection.php');





class Model
{
   

public function Insert($name,$gender,$collage,$email,$mobile,$password){
   
global $conn;
$query='insert into user 
        set
        name="'.$name.'",
        gender="'.$gender.'",
       college="'.$collage.'",
        email="'.$email.'",
        mob="'.$mobile.'",
       password="'.$password.'"
       ';
    
$con=mysqli_query($conn,$query);
return $con;

}
}
?>

