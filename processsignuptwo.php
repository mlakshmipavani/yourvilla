<?php 
if(session_id()=='') session_start();

mysql_connect("localhost","root","");
mysql_select_db("dbms_project");

$result = mysql_query("select username,password,id from users where username='$username' and password ='$password'")
   or die("failed to uery database".mysql_error());

   $row=mysql_fetch_array($result);
    $_SESSION['thisuser'] = $row['username'];
    $_SESSION['thisid'] = $row['id'];
    
    if($type=='owner')
      require 'owner.html';
        else
          require 'tenant.html';
?>