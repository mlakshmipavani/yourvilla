<?php
// Start the session
if(session_id()=='') session_start();

// if ($_POST) {
//    if ($_POST['user']) {
//      $_SESSION['thisuser'] = $_POST($user);
    
//    }
// }

// $ss = $_SESSION['thisuser'] ;
// echo ($ss);
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
      <a class="navbar-brand" href="index.php"><img src="logohome.png" style="height: 40px;width: 50px"></a>
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
            <input type="submit" name="mybtn" id="submit" value="Log in">
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
            <li><a href="elec.html">ELECTRICIAN</a></li>
            <li><a href="plumb.html">PLUMBER</a></li>
            <li><a href="car.html">CARPENTER</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h1>YOURVILLA</h1>
<div id="myCarousel" class="carousel slide c_slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active " >
      <img src="pictures/villa1.jpg" alt="luxurious villa" id="villa1">
    </div>

    <div class="item ">
      <img src="pictures/villa2.jpg" alt="Chania" id="villa1">
    </div>

    <div class="item ">
      <img src="pictures/villa3.jpg" alt="Flower" id="villa1">
    </div>

    <div class="item ">
      <img src="pictures/villa4.jpg" alt="Flower" id="villa1">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--<div class="jumbotron jumbo">-->
  <h2 id="heading">Search a property of your choice</h2>
  
  <form action="search_text.php" method="POST">
  <div class="row jumbo">
  
          <input type="text" class="textbox" placeholder="AREA"  name="area" id="search_box" />
        
          <input type="text" class="textbox" placeholder="PROPERTY TYPE" name="type" id="search_box" />
          <input type="text" class="textbox" placeholder="RANGE"  name="range" id="search_box" />
          <input type="text" class="textbox" placeholder="BEDROOM" name="bhk" id="search_box" /> 
        <button type="submit" class="btn btn-default" id="search_btn"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        </div>
      </form>
  
  <p id="para1">Our website manages a real-estate agency. It acts as a platform for owners, tenants and other customers to unanimously connect with each other to buy, sell or rent properties such as houses, villas or apartment. 
Our customers get the opportunity to select a property that suite their requirements. With a wide range of property options our customers can select a property based on the area, number of BHK’s or based on range which they can afford easily.
</p>
  <p style="margin-top: -10px; margin-left: 75px; font-family:  'Arimo', sans-serif;"><a class="btn btn-primary btn-lg" href="about.html" role="button">Learn more</a></p>
  <p id="para1">Interested to buy or sell your property  then just fill a form and we will take care of it from there</p>
   <p style="margin-left: 75px; margin-top: -10px; font-family:  'Arimo', sans-serif;"><a class="btn btn-primary btn-lg" href="signup.html" role="button">Sign Up</a></p>
 <footer class="container-fluid text-center" style="background-color:black;">
<div class="row">
<div class="col-md-4">
<a href="index.php">www.Yourvilla.com</a>
</div>
<div class="col-md-4">
<p style="color: #a6a6a6"> &copy;  M S Shwetha Koushik &amp; M.Lakshmi pavani &amp; Sreeja Dasari  </p>
</div>
<div class="col-md-4">
<p style="color: #a6a6a6">  <a href="http://wwww.facebook.com"> <img src="fb.png" height="50px" > </a>  <img src="twi.gif" height="50px" style="margin-left: 5px;">  <img src="like.png" height="50px" style="margin-left: 5px;"></p> 
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