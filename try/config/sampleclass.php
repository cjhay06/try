<?php

require 'connection.php';

  class class_php {
      private $server = DB_HOST;
      private $user   = DB_USER;
      private $pass   = DB_PASS;
      private $db     = DB_NAME;
      private $pdo; 

      public function __construct()
      {
           $this->db_connect();
      }

   public function db_connect()//connection OOP PDO
        {
        	$this->pdo = null;
          try{
              $this->pdo = new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->pass);
             	$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              if(!$this->pdo){
              	return false;
              }	
          }catch(PDOException $e){
             echo $e->getMessage();
          }
        }


          // registration
          public function add_user($fullname,$middlename,$lastname, $emailaddress, $username, $password){

                   $role = "user";

                   $stmt = $this->pdo->prepare("INSERT INTO `tbl_user` (`firstname`,`middlename`,`lastname`, `email`, `username`, `password`, `role`)VALUES(?,?,?,?,?,?,?)");
                   $true = $stmt->execute([$fullname,$middlename,$lastname, $emailaddress, $username, $password, $role]);
                  if($true == true){
                   	 return true;
                   }else{
                   	  return false;
             }

          }

        // end registration

        //login

          public function login($emailaddress, $password){

             session_start();

              $stmt1 = $this->pdo->prepare("SELECT * FROM `tbl_user` WHERE `email` = :umail AND `password` = :upass AND `role` = :urole");
              $stmt1->execute(array(':umail' => $emailaddress, ':upass' => $password, ':urole' => 'Admin' ));
              $row = $stmt1->fetch(PDO::FETCH_ASSOC);

              $stmt2 = $this->pdo->prepare("SELECT * FROM `tbl_user` WHERE `email` = :umail AND `password` = :upass AND `role` = :urole");
              $stmt2->execute(array(':umail' => $emailaddress, ':upass' => $password, ':urole' => 'User' ));
              $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);


              if($stmt1->rowCount() > 0){
                $_SESSION['userid'] = htmlentities($row['id']);
                $_SESSION['logged_in'] = true;
               echo '1';
              }else if($stmt2->rowCount() > 0){
                $_SESSION['userid2'] = htmlentities($row2['id']);
                $_SESSION['logged_in2'] = true;
                echo '2';
                
                exit();
              }else{
                echo "<div class='alert alert-danger'>Incorrect Email Address or Password</div>";
              }
          }

       //end login

   


  }
 ?>