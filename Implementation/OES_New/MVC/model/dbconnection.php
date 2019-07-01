<?php


$host="localhost";
$username="root";
$password="";
$database="project";


$conn=mysqli_connect($host,$username,$password,$database);
if(!$conn){
    die("Connectionn Failed: ".$conn->connect_error);
}else{
    
    return $conn;
}

?>