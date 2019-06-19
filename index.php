<?php
     if( $_SERVER['REQUEST_METHOD']=="POST"){ 
      echo 'name is='. $_POST['name_txt'];
      echo "<br>";
      echo 'username='.$_POST['username_txt'];
      echo "<br>";
      echo 'password='.$_REQUEST['password_txt'];
      echo "<br>";
      echo 'confirm  your password='.$_POST['cpassword'];
     }
   else
        header("location:404.php");
       
?>