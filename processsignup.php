<?php 
if(session_id()=='') session_start();

//to get values from login form
//$id=$_POST['id'];
$username=$_POST['user'];
$password=$_POST['pass'];
$email=$_POST['email'];
$type=$_POST['type'];
$name=$_POST['name'];
//to prevent
//$id=stripcslashes($id);
$name=stripcslashes($name);
$username=stripcslashes($username);
$password=stripcslashes($password);
$email=stripcslashes($email);
$type=stripcslashes($type);

//$id=mysql_real_escape_string($id);
$name=mysql_real_escape_string($name);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$email=mysql_real_escape_string($email);
$type=mysql_real_escape_string($type);

//connect to server and select
//$con=mysql_connect("localhost","root","");
//mysql_select_db("login");
$conn = new mysqli("localhost", "root","", "dbms_project");
// Check connection

//query

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO users (name,username,password,email,type)
VALUES ('$name','$username', '$password','$email','$type')";



if ($conn->query($sql) == TRUE) {
    require 'processsignuptwo.php';
   }
 else {
    require 'errors/signuperror.html';
  }

$conn->close();

 ?>