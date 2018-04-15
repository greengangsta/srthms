<?php
//error_reporting(0);
require 'connect.php';

if(isset($_GET['last_name'])) {
 $last_name= trim($_GET['last_name']);
 $people=$db->prepare("SELECT first_name,last_name FROM people WHERE last_name = ?");
 $people->bind_param('s',$last_name);
 $people->execute();
// print_r($people);
$people->bind_result($first_name,$last_name);
$people->fetch();
echo $first_name;
}

?>