<?php
$servername="localhost";
$username="root";
// $password="root";
$password="";
$db_name="database";
$port="3306";
$conn=new mysqli($servername,$username,$password,$db_name,$port);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
// echo "Connection Successful";
echo "";

?>