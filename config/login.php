<?php

  require_once "sampleclass.php";

  if(ISSET($_POST)){

  	  $conn = new class_php();

  	    $emailaddress = $_POST['emailaddress'];
  	    $password = $_POST['password'];
        $conn->login($emailaddress, $password,);
   


     }

 ?>