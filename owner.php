<?php 
if(session_id()=='') session_start();
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
         <li><a href="ownerhomepage.php"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a></li>
         <li><a href="between.php">REGISTER YOUR HOUSE</a></li>
         <li><a href="#">DETAILS OF YOUR TENANTS</a></li>
        <li><a href="view_other_plot.php">VIEW OTHER PLOTS</a></li>
        </ul>
        
      <ul class="nav navbar-nav navbar-right">
      
      
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DOMESTIC HELPLINE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ELECTRICIAN</a></li>
            <li><a href="#">PLUMBER</a></li>
            <li><a href="#">CARPENTER</a></li>
          </ul>
          <li><a href="logout.php">LOG OUT</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<div class="row-md-4">
<div class="well col-md-4" >

<form action="process-owner-reg.php" method="POST" >
    <label font-family:  'Arimo', sans-serif;>Property Name</label><br>
  <input type="text" name="pname" /><br>
	<label font-family:  'Arimo', sans-serif;>Area</label><br>
	<input type="text" name="area" /><br>
	<label font-family:  'Arimo', sans-serif;>Square feet</label><br>
	<input type="text" name="sqft" /><br>
	<!-- <label>Number of BHK</label><br>
	<input type="text" name="bhk" /><br>
  <label>Expected Cost</label><br>
  <input type="text" name="cost" /><br>
  <label>Furnished</label><br>
  <select name="selected_type">
    <option>NOT</option>
    <OPTION>SEMI</OPTION>
    <option>COMPLETELY</option>
  </select><br>
  <label>PROPERTY FOR:</label><br>
  <select name="for_type">
    <option>SALE</option>
    <option>RENT</option>
  </select><br>
  <label>DESCRIBE YOUR PROPERTY</label><br>
  <textarea name="des" type="text"></textarea><br>  -->
	<button type="submit">submit</button>
</form>
</div>
</div>
</div>


<footer class="container-fluid text-center" style="background-color:black;">
<div class="row">
<div class="col-md-4">
<a href="index.html">www.Yourvilla.com</a>
</div>
<div class="col-md-4">
<p style="color: #a6a6a6"> &copy;  M S Shwetha Koushik &amp; M.Lakshmi pavani &amp; Sreeja Dasari  </p>
</div>
<div class="col-md-4">
<p style="color: #a6a6a6">  <img src="fb.png" height="50px" > <img src="twi.gif" height="50px" style="margin-left: 5px;">  <img src="like.png" height="50px" style="margin-left: 5px;"></p> 
</div>
</div>
</footer>
</body>

</html>