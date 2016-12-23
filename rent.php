<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="utf-8">
 <link rel="shortcut icon" href="logohome.ico" />
  <title>YOURVILLA</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script>
   $(document).ready(function(){
  $('#login-trigger').click(function(){
    $(this).next('#login-content').slideToggle();
    $(this).toggleClass('active');          
    
    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    })
});
</script>
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
    <body bgcolor="black">
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
         <li><a href="buy.php">BUY</a></li>
        <li><a href="rent.php">RENT</a></li>
        </ul>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>-->
     <!-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html">SIGN UP</a></li>
      <li ><a  id="login-trigger" href="#">LOG IN</a>

<div id="login-content">
        <form action="processlogin.php" method="POST">
          <fieldset id="inputs">
            <input id="username" type="text" name="user" placeholder="Your email address" required>   
            <input id="password" type="password" name="Pass" placeholder="Password" required>
          </fieldset>
          <fieldset id="actions">
            <input type="submit" id="submit" value="Log in">
            <label><input type="checkbox" checked="checked"> Keep me signed in</label>
          </fieldset>
        </form>
      </div>                     
      </li>
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <li><a href="contact.html"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DOMESTIC HELPLINE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ELECTRICIAN</a></li>
            <li><a href="#">PLUMBER</a></li>
            <li><a href="#">CARPENTER</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php 

mysql_connect("localhost","root","");
mysql_select_db("dbms_project");


$result = mysql_query("SELECT  `area`, `sqft`,`bhk`,`furnished`,`for_type`,`description`,`cost`,`available` FROM `property`,`house` WHERE for_type='rent' and property.pno=house.pno and property.id=house.id and available='yes'")
   or die("failed to query database".mysql_error());
   ?>
<h1>List Of Available Houses!!!</h1>

<table border="2" style= "border-color:#ccc; color:white; margin: 0 auto; margin-top: 20px;" >
      <thead>
        <tr>
          
          <th style="padding: 5px;">Area</th>
          <th style="padding: 5px;">Square Feet</th>
          <th style="padding: 5px;">Range</th>
          <th style="padding: 5px;">Furnished</th>
          <th style="padding: 5px;">Description</th>
          <th style="padding: 5px;">Available</th>
          <th style="padding: 5px;">Type</th>
          <th style="padding: 5px;">No. of BHK</th>

        </tr>
      </thead>
      <tbody>
<?php
while($row_data = mysql_fetch_array($result))
 {echo
            "<tr>
              
              <td>{$row_data['area']}</td>
               <td >{$row_data['sqft']}</td>
              <td>{$row_data['cost']}</td>
               <td>{$row_data['furnished']}</td>
                <td>{$row_data['description']}</td>
                 <td>{$row_data['available']}</td>
              <td>{$row_data['for_type']}</td>
               <td>{$row_data['bhk']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
    <!--<?php mysql_close($connect); ?>-->
    <div class="row" style="margin-top:75px;">
    <img src="i1.jpg" height="300px" width="400px" style="margin-left: 70px; margin-right: 20px;">
    <img src="i2.jpg" height="300px" width="400px" style=" margin-right: 20px;">
    <img src="i3.jpg" height="300px" width="400px">
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

<!--</div>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
    </body>
    </html> 