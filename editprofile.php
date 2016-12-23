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



<script src="content/js/jquery.min.js"></script>
<script src="content/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
   <nav class="navbar navbar-inverse">
 

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="about.html">ABOUT US <span class="sr-only">(current)</span></a></li>
         <!-- <li><a href="owner.html">REGISTER YOUR PLOT</a></li>
          <li><a href="between.php">REGISTER YOUR HOUSE</a></li>     -->  <!-- CHANGES -->
        <li><a href="view_other_plot.php">VIEW OTHER PLOTS</a></li>
        <li><a href="editprofile.php">EDIT PROFILE</a></li>

        </ul>
        
      <ul class="nav navbar-nav navbar-right">
         <!-- <li class="dropdown"> -->
         <!--  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" ></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ELECTRICIAN</a></li>
            <li><a href="#">PLUMBER</a></li>
            <li><a href="#">CARPENTER</a></li>
          </ul> -->
        <!--  </li> -->
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
          <li><a href="logout.php">LOG OUT</a></li>
      
      
      </ul>
    </div><!-- /.navbar-collapse -->
 <!--  </div> --><!-- /.container-fluid -->
</nav>


<?php 

mysql_connect("localhost","root","");
mysql_select_db("dbms_project");

// Echo session variables that were set on previous page

//echo "username" . $_SESSION["username"] . ".<br>";

$username= $_SESSION["thisuser"];

//query

$result = mysql_query("SELECT  * FROM `users` WHERE '$username'=users.username")
   or die("failed to query database".mysql_error());
// users.id=house.id and
   ?>
<!--    <h1 style="color: #a6a6a6;font-family:  'oswald', sans-serif;">Welcome <?php echo $_SESSION['thisuser'];?> !!!</h1>
 -->
 <!-- <h1 style="font-size: 26px;">YOUR PROFILE </h1> 
 -->

<!-- <table border="2" style= "border-color:#ccc; color:white; margin: 0 auto; margin-top: 20px;" >
      <thead>
        <tr>
          
          <th style="padding: 5px;">Name</th>
          <th style="padding: 5px;">username</th>
          <th style="padding: 5px;">password</th>
          <th style="padding: 5px;">Email</th>
          <th style="padding: 5px;">Type</th>

        </tr>
      </thead>
      <tbody>
<?php
while($row_data = mysql_fetch_array($result))
 {echo
            "<tr>
              
              <td>{$row_data['name']}</td>
              <td >{$row_data['username']}</td>
              <td>{$row_data['password']}</td>
              <td>{$row_data['email']}</td>
              <td>{$row_data['type']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
</table>
 -->
 <style type="text/css">input::-webkit-input-placeholder {
color: black !important;
font-size: 16px;
font-family:  'Arimo', sans-serif;
padding-left: 20px;
}</style>


<?php
$row_data = mysql_fetch_array($result);
?>
  <div class="container" style="padding:50px 400px" style="border-color:white">
    <div class="well">
    <form action="editprofileprocess.php" method="POST">
      <label>Name    </label>
      <input type="text" name="name" placeholder="" style="margin-left: 28px;" class="form-control" /></p>
      <label>PASSWORD</label>
      <input type="text" name="password" placeholder="" style="margin-left: 28px;" class="form-control" /></p>
      <label>EMAIL    </label>
      <input type="text" name="email" placeholder="" style="margin-left: 28px;"  class="form-control"/></p>
      <button type="submit">change</button>
    </form>
    </div>
  </div>
  <style type="text/css">input::-webkit-input-placeholder {
color: white !important;
font-size: 16px;
font-family:  'Arimo', sans-serif;
padding-left: 20px;
}</style>

</style>
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
<footer class="container-fluid text-center" style="background-color:black;">
<div class="row">
<div class="col-md-4">
<a href="index.php">www.Yourvilla.com</a>
</div>
<div class="col-md-4">
<p style="color: #a6a6a6"> &copy;  M S Shwetha Koushik &amp; M.Lakshmi pavani &amp; Sreeja Dasari  </p>
</div>
<div class="col-md-4">
<p style="color: #a6a6a6">  <img src="fb.png" height="50px" > <img src="twi.gif" height="50px" style="margin-left: 5px;">  <img src="like.png" height="50px" style="margin-left: 5px;"></p> 
</div>
</div>
</footer>