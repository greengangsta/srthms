<html>
<head>
 <style>
body {
    background-color: LightSteelBlue;
   background-image: url("hmsproject.jpg");
  background-size: 100% ,100%;
    background-repeat: no-repeat;
    background-position: left top;
    background-attachment: fixed;
}

 </style>
 <body>
 <h1><strong>Hospital Management System</strong><h1>
   <hr><br><br><br>
 <h3>Administrator Login :</h3>

 </body>
</head>
</html>
<?php
require 'connect.inc.php';
require 'core.php';

if(loggedin()){
  $firstname=getuserfield('firstname');
  $surname=getuserfield('surname');
  echo 'You are logged in,'.$firstname.' '.$surname. ' <a href=logout.php> Log out</a><br>';
  
  echo '<br>Add an ADMIN <a href="register.php">Register</a>';

  echo '<br><br><a href=application.php>To enter records click here</a>';
  
  echo '<br><br><a href=report1.php>Generate Report.</a>';
}else {
     include 'loginform.php';

}

?>
<br>

<br><br><br><br><br><br><br><br><br><br><br>
 <h2><a href="">Contact</a></h2>