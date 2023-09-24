<?php
     include 'partials/_dbconnect.php';
     include 'partials/_header.php';
     include 'partials/_nav.php';



     if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo 'This is a profile page';
     } else{
      // echo "logged in ". $username;

      echo '<h1>You are not Logged In. 
      </h1>
      <a data-bs-toggle="modal" class ="btn text-primary" data-bs-target="#loginModal"> Login Here </a>
      ';
     }













     include 'partials/_footer.php';
?>