<?php                               // to register property
if(session_id()=='') session_start();

//to get values from login form
//$id=$_POST['id'];
$pname=$_POST['pname'];
$area=$_POST['area'];
$sqft=$_POST['sqft'];

// $bhk=$_POST['bhk'];
// $cost=$_POST['cost'];
// $furnished=$_POST['selected_type'];
// $for_type=$_POST['for_type'];
// $description=$_POST['des'];

//to prevent
//$id=stripcslashes($id);
$area=stripcslashes($area);
$sqft=stripcslashes($sqft);
// $bhk=stripcslashes($bhk);
// $cost=stripcslashes($cost);
// $furnished=stripcslashes($furnished);
// $for_type=stripcslashes($for_type) ;
// $description=stripcslashes($description);
//$id=mysql_real_escape_string($id);
$area=mysql_real_escape_string($area);
$sqft=mysql_real_escape_string($sqft);
// $bhk=mysql_real_escape_string($bhk);
// $cost=mysql_real_escape_string($cost);
// $furnished=mysql_real_escape_string($furnished);
// $for_type=mysql_real_escape_string($for_type);
// $description=mysql_real_escape_string($description);

//connect to server and select
//$con=mysql_connect("localhost","root","");
//mysql_select_db("login");
$conn = new mysqli("localhost", "root","", "dbms_project");
// Check connection

//query

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$res=mysql_query("select * from users ") or die("failed to query database".mysql_error());
 //$row=mysql_fetch_array($res);
 //$res1=mysql_query("select property.pno from property,house1 where property.pno=house1.pno");
 //$row1=mysql_fetch_array($res1);
//echo $sqlupdate1 = "UPDATE house1 SET house1.id=users.id" ;
//echo $sqlupdate1 = "UPDATE house1 SET house1.pno=property.pno" ;
//$pno=
$temp = $_SESSION['thisid'] ;
$sql="INSERT INTO property (area,sqft,pname,id) VALUES('$area','$sqft','$pname','$temp')";
if ($conn->query($sql) == TRUE) {
	
    	$sql="SELECT LAST_INSERT_ID() from property ";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   


}
//$sql="SELECT LAST_INSERT_ID() from property ";

// $sql = "INSERT INTO house (pno,bhk,cost,furnished,for_type,description) VALUES (LAST_INSERT_ID(),'$bhk', '$cost','$furnished','$for_type',
// '$description')";

//WHERE 'login'.'users'.id='".$row['id']."' ";
//echo $sqlupdate2 = "UPDATE table SET pno=$pno WHERE pno='".$row1['pno']."' ";

if ($conn->query($sql) == TRUE) {
	
    	require 'owner_success.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   


}

$conn->close();
   
   

 ?>