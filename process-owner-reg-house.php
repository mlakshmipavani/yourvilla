<?php                              //registers a house
if(session_id()=='') session_start();

//to get values from login form
//$id=$_POST['id'];
// $area=$_POST['area'];
// $sqft=$_POST['sqft'];
$prop=$_POST['prop'];
$bhk=$_POST['bhk'];
$cost=$_POST['cost'];
$furnished=$_POST['selected_type'];
$for_type=$_POST['for_type'];
$available = $_POST['available'];
$description=$_POST['des'];
//to prevent
//$id=stripcslashes($id);

// $area=stripcslashes($area);
// $sqft=stripcslashes($sqft);
$prop=stripcslashes($prop);
$bhk=stripcslashes($bhk);
$cost=stripcslashes($cost);
$furnished=stripcslashes($furnished);
$for_type=stripcslashes($for_type) ;
$available=stripcslashes($available) ;
$description=stripcslashes($description);
//$id=mysql_real_escape_string($id);
// $area=mysql_real_escape_string($area);
// $sqft=mysql_real_escape_string($sqft);
$prop=mysql_real_escape_string($prop);
$bhk=mysql_real_escape_string($bhk);
$cost=mysql_real_escape_string($cost);
$furnished=mysql_real_escape_string($furnished);
$for_type=mysql_real_escape_string($for_type);
$available=mysql_real_escape_string($available);
$description=mysql_real_escape_string($description);

//connect to server and select
//$con=mysql_connect("localhost","root","");
//mysql_select_db("login");
$conn = new mysqli("localhost", "root","", "dbms_project");
// Check connection

//query

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $sql="SELECT LAST_INSERT_ID() from property ";
$temp = $_SESSION['thisid'];
$sql = "INSERT INTO house (pno,bhk,cost,furnished,for_type,description,id,available) VALUES ('$prop','$bhk', '$cost','$furnished','$for_type',
'$description','$temp','$available')";



if ($conn->query($sql) == TRUE) {
	
    	require 'owner_success.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  

}

$conn->close();
   
?>