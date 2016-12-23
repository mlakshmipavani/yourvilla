<?php
// Start the session
if(session_id()=='') session_start();
// if(isset($_SESSION['thisuser'])
//   echo "string";
?>

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
         <!-- <li><a href="ownerhomepage.php"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a></li> -->
    <!--      <li><a href="#">DETAILS OF YOUR TENANTS</a></li> -->
        <li><a href="view_other_plot.php">VIEW OTHER PLOTS</a></li>
        <li><a href="profile.php">PROFILE</a></li>
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
<?php 

mysql_connect("localhost","root","");
mysql_select_db("dbms_project");

$temp = $_SESSION['thisuser'];
// $result = mysql_query("SELECT  `id` FROM `users` WHERE username ='$temp'")
//    or die("failed to query database".mysql_error());
// $result = mysql_fetch_array($result) ;
// $result = $result['id'];
// $result1 = mysql_query("SELECT  `hno` FROM `house` WHERE id ='$result'")
//    or die("failed to query database".mysql_error());
//    $result1 = mysql_fetch_array($result1) ;
// $result1 = $result1['hno'];
// $result2 = mysql_query("SELECT  `id` FROM `house_tenent` WHERE hno ='$result1'")
//    or die("failed to query database".mysql_error());
//    $result2 = mysql_fetch_array($result2) ;
// $result2 = $result2['id'];
// $result3 = mysql_query("SELECT  `name`,`email` FROM `users` WHERE id ='$result2'")
//    or die("failed to query database".mysql_error());

   $result = mysql_query("SELECT `name`,`email` FROM `users` WHERE id in (SELECT `id` from `house_tenent` where hno in (select `hno` from `house` where id in (SELECT `id` from users where username ='$temp')))")
   or die("failed to query database".mysql_error());
   ?>
<h1>List Of YOUR TENENTS!!!</h1>

<table border="2" style= "border-color:#ccc; color:white; margin: 0 auto; margin-top: 20px;" >
      <thead>
        <tr>
          <th style="padding: 5px;">Name</th>
          <th style="padding: 5px;">Email</th>
        </tr>
      </thead>
      <tbody>
<?php
while($row_data = mysql_fetch_array($result))
 {echo
            "<tr>
              
              <td>{$row_data['name']}</td>
               <td >{$row_data['email']}</td>
             
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