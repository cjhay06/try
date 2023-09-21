<?php

  require_once "sampleclass.php";

  if(ISSET($_POST)){

  	  $conn = new class_php();

  	    $fullname = htmlentities(strip_tags(stripcslashes(trim($_POST['fullname']))));
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
  	    $emailaddress = $_POST['emailaddress'];

  	    $username = $_POST['username'];
  	    $password = $_POST['password'];


        $add = $conn->add_user($fullname,$middlename,$lastname, $emailaddress, $username, $password);
         
         if($add == TRUE){
         	echo "<div class='alert alert-success' role='alert' id='msg'>Added Member Successfully</div><script> setTimeout(function(){location.replace('index.php');}, 1000);</script>";
           }else{
           	echo "<div class='alert alert-danger' role='alert' id='msg'>Added Member Failed</div><script> setTimeout(function(){location.replace('signup');}, 1000);</script>";
           }




     }

 ?>