<?php 
//to get values from login form
if(session_id()=='') session_start();


$username=$_POST['user'];
$password=$_POST['Pass'];

 

//to prevent
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

//connect to server and select
mysql_connect("localhost","root","");
mysql_select_db("dbms_project");



//query

$result = mysql_query("select username,password,id,type from users where username='$username' and password ='$password'")
   or die("failed to uery database".mysql_error());

   $row=mysql_fetch_array($result);
   if ($row['username']==$username  && $row['password']==$password) {
   	$_SESSION['thisuser'] = $username;
   	$_SESSION['thisid'] = $row['id'];
   	if($row['type'] == 'owner'){
       require 'ownerhomepage.php';
   	}
   	elseif($row['type'] == 'tenent')
    	require 'tenenthomepage.php';
    elseif($row['type'] == 'admin')
    	require 'betweenadmin.php';
   }
   else {
     
   	require 'signup.html';
   
   }
   

 ?>