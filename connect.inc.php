 <?php

$db=new mysqli('localhost','id5403966_surajtripathi','Suraj#221B','id5403966_surajtripathi_app');


if($db->connect_errno) {
  echo $db->connect_error;
   die('Sorry, we are having some error');
}

?>