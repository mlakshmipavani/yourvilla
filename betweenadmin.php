 <?php
 if(session_id()=='') session_start();
// // Start the session
// <?php

$conn = new mysqli("localhost", "root","", "dbms_project");
// Check connection

//query

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$temp = $_SESSION['thisid'];
// echo $temp;
$sql = "SELECT hno,pno FROM house"; 
// where ='$_SESSION['thisid']'
$result = $conn->query($sql);
$resultData = [];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $resultData[$row['hno']] = $row['hno'];
    }
}

if ($conn->query($sql) == TRUE) {
	
    	require 'adminhomepage.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
   
 }
$conn->close();

?>