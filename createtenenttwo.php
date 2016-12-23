<?php 
if(session_id()=='') session_start();

//to get values from login form
// //$id=$_POST['id'];
// $username=$_POST['username'];
// $password=$_POST['password'];
// // $type=$_POST['type'];
// $name=$_POST['name'];
// //to prevent
// //$id=stripcslashes($id);
// $name=stripcslashes($name);
// $username=stripcslashes($username);
// $password=stripcslashes($password);
// // $type=stripcslashes($type);

// //$id=mysql_real_escape_string($id);
// $name=mysql_real_escape_string($name);
// $username=mysql_real_escape_string($username);
// $password=mysql_real_escape_string($password);
// // $type=mysql_real_escape_string($type);

// //connect to server and select
//$con=mysql_connect("localhost","root","");
//mysql_select_db("login");
mysql_connect("localhost","root","");
mysql_select_db("dbms_project");

$res = mysql_query("select id from users where username='$username'")
   or die("failed to uery database".mysql_error());
 $r=mysql_fetch_array($res);

$result = mysql_query("insert into house_tenent(hno,id) values($house,$r[id])")
   or die("failed to uery database".mysql_error());
// if($result === FALSE) { 
//     die(mysql_error()); // TODO: better error handling
// }
//     $row=mysql_fetch_array($result);
   //  $_SESSION['thisuser'] = $row['username'];
   //  $_SESSION['thisid'] = $row['id'];
    
  
      require 'adminhomepage.php';
      


 ?>