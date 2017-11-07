<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      
      if (!$db){
         die("Connection Failed: " . mysqli_connect_error());
      }
      
      $sql = "SELECT password FROM login_info WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['password'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if(password_verify($mypassword,$active)) {
         echo 'Successful Login\nRedirecting In 2 Seconds...';
         $_SESSION['login_user'] = $myusername;
         sleep(3);
         header('Location: https://google.com');
      }else {
         $error = "Your Login Name or Password Is Invalid.";
      }
   }
?>
