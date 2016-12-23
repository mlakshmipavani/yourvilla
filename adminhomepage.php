<?php
// Start the session
if(session_id()=='') session_start();
// if(isset($_SESSION['thisuser'])
//   echo "string";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
 <link rel="shortcut icon" href="logohome.ico" />
  <title>YOURVILLA</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Oswald|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="logohome.png" style="height: 40px;width: 50px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="about.html">ABOUT US <span class="sr-only">(current)</span></a></li>
        <!--  <li><a href="owner.html">REGISTER YOUR PLOT</a></li> -->
         <!--  <li><a href="between.php">REGISTER YOUR HOUSE</a></li>   -->    <!-- CHANGES -->
         <li><a href="#">DETAILS OF YOUR TENANTS</a></li>
        <li><a href="view_other_plot.php">VIEW OTHER PLOTS</a></li>
        </ul>
        
      <ul class="nav navbar-nav navbar-right">
      
      
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DOMESTIC HELPLINE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="elec.html">ELECTRICIAN</a></li>
            <li><a href="plumb.html">PLUMBER</a></li>
            <li><a href="car.html">CARPENTER</a></li>
          </ul>
          <li><a href="logout.php">LOG OUT</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--  <?php 

// mysql_connect("localhost","root","");
// mysql_select_db("dbms_project");

// // Echo session variables that were set on previous page

// //echo "username" . $_SESSION["username"] . ".<br>";

// $username= $_SESSION["thisuser"];

//query

// $result = mysql_query("SELECT  `area`, `sqft`,`bhk`,`furnished`,`for_type`,`description`,`cost`,`available` FROM `property`,`house`,`users` WHERE '$username'=users.username and property.pno=house.pno and users.id=house.id")
//    or die("failed to query database".mysql_error());
// <?php
if (isset($_POST['submit'])) {

    mysql_connect("localhost","root","");
    mysql_select_db("dbms_project");
    $sql="INSERT INTO users (name,username,password,type)
    VALUES
    ('$_POST[name]',$_POST[username],$_POST[password],'tenent')";
    // echo "user Successfully Added!";
   require 'index.php';
}
?> -->

<!-- ?>
 -->
<h1>Create New Tenent Access </h1>

<div class="container" >
  <div class="row-md-4" >
  <div class="well col-md-4" >

<form action="createtenent.php" method="POST" >
  
  <label>Name</label><br>
  <input type="text" name="name" /><br> 
  <label>USername</label><br>
  <input type="text" name="username" /><br>
  <label>Password</label><br>
  <input type="text" name="password" /><br>
  <label>House</label><br>
  <select name="house" size="4" style="width:150px" multiple="multiple">
  <?php
   foreach ($resultData as $key => $value) {
    echo '<option value="'.$key.'">'.$value.'</option>';
   }
  ?>
  </select>
  <br>
  <button type="submit">Submit</button>
</form>
</div>
</div>
</div>




 <!-- <div class="row" style="margin-top:75px;">
    <img src="i1.jpg" height="300px" width="400px" style="margin-left: 70px; margin-right: 20px;">
    <img src="i2.jpg" height="300px" width="400px" style=" margin-right: 20px;">
    <img src="i3.jpg" height="300px" width="400px">
    </div> -->


<footer class="container-fluid text-center" style="background-color:black;">
<div class="row">
<div class="col-md-4">
<a href="index.html">www.Yourvilla.com</a>
</div>
<div class="col-md-4">
<p style="color: #a6a6a6"> &copy;  M S Shwetha Koushik &amp; M.Lakshmi pavani &amp; Sreeja Dasari  </p>
</div>
<div class="col-md-4">
<p style="color: #a6a6a6">  <a href="http://www.facebook.com"><img src="fb.png" height="50px" ></a> <a href="http://teitter.com"><img src="twi.gif" height="50px" style="margin-left: 5px;"></a>  <img src="like.png" height="50px" style="margin-left: 5px;"></p> </div>
</div>
</footer>