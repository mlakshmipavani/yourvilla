<?php 
if(session_id()=='') session_start();

//to get values from login form
//$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$house=$_POST['house'];
$name=$_POST['name'];
//to prevent
//$id=stripcslashes($id);
$name=stripcslashes($name);
$username=stripcslashes($username);
$password=stripcslashes($password);
$house=stripcslashes($house);

//$id=mysql_real_escape_string($id);
$name=mysql_real_escape_string($name);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$house=mysql_real_escape_string($house);

//connect to server and select
//$con=mysql_connect("localhost","root","");
//mysql_select_db("login");
$conn = new mysqli("localhost", "root","", "dbms_project");
// Check connection

//query

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO users (name,username,password,type)
VALUES ('$name','$username', '$password','tenent')";



if ($conn->query($sql) == TRUE) {
   // echo 'successful';
    require 'createtenenttwo.php';
   }

    
//      if($type=='owner')
//      require 'owner.html';
//         else
//          require 'tenant.html';
// }
 else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    require 'errors/signuperror.html';
  }

$conn->close();

 ?>