<?php
     include 'partials/_dbconnect.php';
     include 'partials/_header.php';
     include 'partials/_nav.php';
?>

<style>
   @import url(https://fonts.googleapis.com/css?family=Quicksand:300,400|Lato:400,300|Coda|Open+Sans);
   body {
   background: #f8f5f0;
   font-family: "Open sans", sans-serif;
   }
   a {
   text-decoration: none;
   color: #3498db;
   }
   .content-profile-page {
   margin: 1em auto;
   width: 44.23em;
   }

   .card {
   background: #fff;
   border-radius: 0.3rem;
   box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
   border: .1em solid rgba(0, 0, 0, 0.2);
   margin-bottom: 1em; 
   }

   .profile-user-page .img-user-profile {
      margin: 0 auto;
   text-align: center; 
   }
   .profile-user-page .img-user-profile .profile-bgHome {
      border-bottom: .2em solid #f5f5f5;
   width: 44.23em;
   height: 16em;
   }
   .profile-user-page .img-user-profile .avatar {
      margin: 0 auto;
   background: #fff;
   width: 7em;
   height: 7em;
   padding: 0.25em;
   border-radius: .4em;
   margin-top: -10em;
   box-shadow: 0 0 .1em rgba(0, 0, 0, 0.35);
   }
   .profile-user-page button {
      position: absolute;
   font-size: 13px;
   font-weight: bold;
   cursor: pointer;
   width: 7em; 
   background: #3498db;
   border: 1px solid #2487c9;
   color: #fff;
   outline: none;
   border-radius: 0 .6em .6em 0;
   padding: .80em;
   }

   .profile-user-page button:hover {
   background: #51a7e0;
   transition: background .2s ease-in-out;
   border: 1px solid #2487c9;
   }
   .profile-user-page .user-profile-data, .profile-user-page .description-profile {
   text-align: center;
   padding: 0 1.5em; 
   }
   .profile-user-page .user-profile-data h1 {
   font-family: "Lato", sans-serif;
   margin-top: 0.35em;
   color: #292f33;
   margin-bottom: 0; 
   }
   .profile-user-page .user-profile-data p {
      font-family: "Lato", sans-serif;
   color: #8899a6; 
   font-size: 1.1em;
   margin-top: 0;
   margin-bottom: 0.5em; 
   }
   .profile-user-page .description-profile {
   color: #75787b;
   font-size: 0.98em; 
   }
   .profile-user-page .data-user {
      font-family: "Quicksand", sans-serif;
   margin-bottom: 0;
   cursor: pointer;
   padding: 0;
   list-style: none;
   display: table;
   width: 100.15%; 
   }
   .profile-user-page .data-user li {
   margin: 0;
   padding: 0;
   width: 33.33334%;
   display: table-cell;
   text-align: center;
   border-left: 0.1em solid transparent; 
   }
   .profile-user-page .data-user li:first-child {
   border-left: 0; 
   }
   .profile-user-page .data-user li:first-child a {
   border-bottom-left-radius: 0.3rem; 
   }
   .profile-user-page .data-user li:last-child a {
   border-bottom-right-radius: 0.3rem; 
   }
   .profile-user-page .data-user li a, .profile-user-page .data-user li strong {
   display: block; 
   }
   .profile-user-page .data-user li a {
   background-color: #f7f7f7;
   border-top: 1px solid rgba(242,242,242,0.5);
   border-bottom: .2em solid #f7f7f7;
   box-shadow: inset 0 1px 0 rgba(255,255,255,0.4),0 1px 1px rgba(255,255,255,0.4);
   padding: .93em 0;
   color: #46494c; 
   }
   .profile-user-page .data-user li a strong, .profile-user-page .data-user li a span {
   font-weight: 600;
   line-height: 1; 
   }
   .profile-user-page .data-user li a strong {
   font-size: 2em; 
   }
   .profile-user-page .data-user li a span {
   color: #717a7e; 
   }
   .profile-user-page .data-user li a:hover {
   background: rgba(0, 0, 0, 0.05);
   border-bottom: .2em solid #3498db;
   color: #3498db; 
   }
   .profile-user-page .data-user li a:hover span {
   color: #3498db; 
   }

   footer h4 {
   display: block;
   text-align: center;
   clear: both;
   font-family: "Coda", sans-serif;
   color: #566965;
   line-height: 6;
   font-size: 1em;
   }
   footer h4 a {
   text-decoration: none;
   color: #3498db;
   }
</style>


<?php

     if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

      
// Include your database connection file (e.g., _dbconnect.php)

// User's ID (you should have this value)
$userId = $_SESSION['user_id']; // Replace with your actual method of retrieving the user's ID

// SQL query to count the number of blog posts for a specific user
$sql = "SELECT COUNT(*) as blogCount FROM blogs WHERE user_id = '$userId' ";
$stmt = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($stmt);




        echo '<div class="content-profile-page">
        <div class="profile-user-page card">
           <div class="img-user-profile">
             <img class="profile-bgHome" src="https://37.media.tumblr.com/88cbce9265c55a70a753beb0d6ecc2cd/tumblr_n8gxzn78qH1st5lhmo1_1280.jpg" />
             <img class="avatar" src="http://gravatar.com/avatar/288ce55a011c709f4e17aef7e3c86c64?s=200" alt="jofpin"/>
                </div>
               <button>Follow</button>
               <div class="user-profile-data">
                 <h1>'.$_SESSION['username'].'</h1>
                 <p>github.com/jofpin</p>
               </div> 
               <div class="description-profile">Front-end | Security Researcher | CSS Warrior | <a href="https://twitter.com/bullgit" title="bullgit"><strong>@bullgit</strong></a> | I love to create small things for the internet!</div>
            <ul class="data-user">
             <li><a><strong>'.$row['blogCount'].'</strong><span>Posts</span></a></li>
             <li><a><strong>'.$row['blogCount'].'</strong><span>Approved</span></a></li>
             <li><a><strong>0</strong><span>Pending</span></a></li>
            </ul>
           </div>
         </div>
     
     <footer>
        <h4>Design by <a href="https://twitter.com/jofpin" target="_blank" title="José Pino">@jofpin</a></h4>
     </footer>';
     } else{
      // echo "logged in ". $username;

      echo '<h1>You are not Logged In. 
      </h1>
      <a data-bs-toggle="modal" class ="btn text-primary" data-bs-target="#loginModal"> Login Here </a>
      ';
     }













     include 'partials/_footer.php';
?>