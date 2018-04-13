<?php
require 'connect.php';
//error_reporting(E_ALL);

if($result=$db->query("UPDATE people SET created=NOW() WHERE id=1 ")) {
 if($count=$result->num_rows) {
   echo '<p>',$count,'</p>';
    while($row=$result->fetch_object()) {
     echo $row->first_name,' ',$row->last_name,'<br>';
    }
    
    $result->free();
}
}else {
die($db->error);
}
?>
