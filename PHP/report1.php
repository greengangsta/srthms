<h1>Report Generation</h1>
<?php
require 'connect.inc.php';
if(isset($_POST['pname'])&&!empty($_POST['pname'])) {
 $pname=$_POST['pname'];
 $query="SELECT `last_name` FROM people WHERE first_name='$pname' ";
$query_run=mysqli_query($db,$query);
if($query_run->fetch_assoc()){
echo '<a href="reports.php">Download Report.<br></a>';
}else{
  echo 'Report Not Found!';
}
}else {
 echo 'Please enter the patient\'s name.<br>';
}

?>

 <br>

<form action="report1.php" method="POST">
Patient name : <input type="text" name="pname"><br><br>
<input type="submit" value="Search">
</form>


<html>
<head>
<body>
 <style>
 body{
   background-color: LightSteelBlue;
   background-image: url("syringe.jpg");
  background-size: 100% ,100%;
    background-repeat: no-repeat;
    background-position: left top;
    background-attachment: fixed;
 }
 </style>
</body>
</head>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><hr><h2><a href=loginhm.php>HOME</a></h2><a href="logout1.php"><strong>Log out</strong></a>

</html>

