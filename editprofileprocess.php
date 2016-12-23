<?php 
if(session_id()=='') session_start();

//to get values from login form
//$id=$_POST['id'];
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
//to prevent
//$id=stripcslashes($id);
$name=stripcslashes($name);
$password=stripcslashes($password);
$email=stripcslashes($email);

//$id=mysql_real_escape_string($id);
$name=mysql_real_escape_string($name);
$password=mysql_real_escape_string($password);
$email=mysql_real_escape_string($email);

//connect to server and select
//$con=mysql_connect("localhost","root","");
//mysql_select_db("login");
$conn = new mysqli("localhost", "root","", "dbms_project");
// Check connection

//query

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$temp = $_SESSION['thisuser'];
if($name!=NULL && $password!=NULL && $email!=NULL )
  $sql = "update users set name='$name',password='$password',email='$email' where username ='$temp'";
else if($name!=NULL && $password!=NULL )
  $sql = "update users set name='$name',password='$password' where username ='$temp'";
else if($name!=NULL && $email!=NULL)
  $sql = "update users set name='$name',email='$email' where username ='$temp'";
else if( $password!=NULL && $email!=NULL )
  $sql = "update users set password='$password',email='$email' where username ='$temp'";
else if($name!=NULL )
  $sql = "update users set name='$name' where username ='$temp'";
else if($password!=NULL)
  $sql = "update users set password='$password' where username ='$temp'";
else if($email!=NULL )
  $sql = "update users set email='$email' where username ='$temp'";
else
  require 'errors/allerrors.php';    

if ($conn->query($sql) == TRUE) {
    require 'profile.php';    
	
   }

 else {
    require 'errors/allerrors.php';    
    
  }

$conn->close();

 ?>