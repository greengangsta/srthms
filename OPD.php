<h1 align="center">OPD</h1>
<hr>

<form action="OPD.php" method="POST">
<h2>Registration :</h2><br><br>
Visit S/N :<input type="text" name="visit" required/><br><br>
Reg Number :<input type="text" name="reg" required/><br><br>
Department :<input type="text" name="department" required/><br><br>
Consulting Doctor Name :<input type="text" name="doctor" required/><br><br>
Patients Name :<input type="text" name="pname" required/><br><br>
Fathers Name :<input type="text" name="father" required/><br><br>
Age :<input type="text" name="age" required/>  Sex  :<input type="text" name="sex" required/>  Religion :<input type="text" name="religion" required/><br><br>
Address :<input type="text" name="address" required/><br><br>
City :<input type="text" name="city" required/>State :<input type="text" name="state" required/><br><br>
Pin :<input type="text" name="pin" required/>Phone No :<input type="text" name="phone" required/><br><br>
<input type="submit" value="Register">
</form>
    <style>
    body{
     background-color: LightSteelBlue;
    }
    </style>
    
<?php
   require_once 'core.php';
   require_once 'connect.inc.php';
   require_once 'security.php';
   
   if(!empty($_POST)){
   if(isset($_POST['visit'])){
   $visit=$_POST['visit'];
   $reg=$_POST['reg'];
   $department=$_POST['department'];
   $doctor=$_POST['doctor'];
   $pname=$_POST['pname'];
   $father=$_POST['father'];
   $age=$_POST['age'];
   $sex=$_POST['sex'];
   $religion=$_POST['religion'];
   $address=$_POST['address'];
   $city=$_POST['city'];
   $state=$_POST['state'];
   $pin=$_POST['pin'];
   $phone=$_POST['phone'];

 $insert=$db->prepare("INSERT INTO opd(visit,reg,department,doctor,pname,father,age,sex,religion,address,city,state,pin,phone,created) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())");
      $insert->bind_param('ssssssssssssss',$visit,$reg,$department,$doctor,$pname,$father,$age,$sex,$religion,$address,$city,$state,$pin,$phone);
      if($insert->execute()){
        echo 'alright upto here';
        header('Location: application.php');
       //die();

       exit();
      }
   }
   
   
   }

?>