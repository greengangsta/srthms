<?php
//error_reporting(0);
require 'core.php';
require 'connect.inc.php';
require 'security.php';

$records=array();
if(!empty($_POST)){
  if(isset($_POST['first_name'],$_POST['last_name'],$_POST['bio'])){
    $first_name=trim($_POST['first_name']);
    $last_name=trim($_POST['last_name']);
    $bio=trim($_POST['bio']);

    if(!empty($first_name)&&!empty($last_name)&&!empty($bio)){
       $insert=$db->prepare("INSERT INTO people(first_name,last_name,bio,created) VALUES(?,?,?,NOW())");
      $insert->bind_param('sss',$first_name,$last_name,$bio);

      if($insert->execute()){
        header('Location: application.php');
       //die();

       exit();
      }
    }

  }
}
 if($results=$db->query("SELECT * FROM people")) {
  if($results->num_rows) {
  while($row=$results->fetch_object()){
    $records[]=$row;
  }
  $results->free();
  }
 }
 // echo '<pre>',print_r($records),'</pre>'
?>
<!DOCTYPE html>
<html>
  <head>
    </title><Patients></title>
    <style>
    body{
     background-color: LightSteelBlue;
    }
    </style>
      <body>
      <h1>Patient Record Database</h1>
      <hr>
      <?php
      if(!count($records)){
        echo 'No records';
      }else{

      ?>
                  <table>
                     <thead>
                        <tr>
                          <th>First name  </th>
                          <th>Last name  </th>
                          <th>Problem/Ailment </th>
                          <th>Date Admitted</th>

                        </tr>
                     </thead>
                     <tbody>
                     <?php
                     foreach($records as $r){
                     ?>
                               <tr>
                                 <td><?php echo escape($r->first_name);?></td>
                                 <td><?php echo escape($r->last_name);?></td>
                                 <td><?php echo escape($r->bio);?></td>
                                 <td><?php echo escape($r->created);?></td>
                               </tr>
                               <?php
                               }
                               ?>
                     </tbody>
                  </table>
         <?php
            }

           ?>
           <hr>
           <h4>Enter the record's from here : <h4>
           <form action="" method="POST">
           <div class="field">
             <label for="first_name">First name : </label>
             <input type="text" name="first_name" id="first_name" autocomplete="off">
           </div>
           <br>
           <div class="field">
             <label for="first_name">Last name : </label>
             <input type="text" name="last_name" id="last_name" autocomplete="off">
           </div>
           <div class="field">
           <br>
             <label for="bio">Problem/s :</label>
             <textarea name="bio" id="bio"></textarea>
           </div>
           <br>
            <input type="submit" value="Insert">
           </form>

        <br><br><br><br><br><a href="logout1.php"><strong>Log out</strong></a>
      </body>
  </head>
</html>
<?php
 //<script>alert('Record inserted SUCCESSFULLY');</script>
?>