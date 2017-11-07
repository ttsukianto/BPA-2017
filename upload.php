<?php
    include("./php/config.php");

    if(isset($_POST)) {
      // username and password sent from form 
      
      $user = $_POST['username'];
      $title = $_POST['title'];
      $picture = $_POST['picture'];
      $desc = $_POST['desc'];
      
      if (!$db){
         die("Connection Failed: " . mysqli_connect_error());
      }


      $result = mysqli_query($db,"SELECT count(*) FROM projects");
      $row = mysqli_fetch_row($result);
      $num = $row[0];
      
      $sql = "INSERT INTO `projects`(`name`, `picture`, `body`, `id`) VALUES ('$user - $title','$picture','$desc',$num)";
      mysqli_query($db, $sql);
      echo "$sql";


      mysqli_close($con);

      sleep(1);
      header('Location: http://bpa.westada.xyz/project.php?id='.$num);
   }

?>