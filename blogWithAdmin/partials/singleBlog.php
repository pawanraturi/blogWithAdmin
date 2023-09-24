<?php
     include '_dbconnect.php';
     include '_header.php';
     include '_nav.php';

     $blogSno = $_GET['blogSno'];

     $sql = "select * from blogs where sno = '$blogSno' ";
     $result = mysqli_query($conn, $sql);
     $numRows = mysqli_num_rows($result);

     if($numRows == 1){
          $row = mysqli_fetch_assoc($result);
          $blogUserId = $row['user_id'];
          $sql2 = "select * from users where user_id = '$blogUserId' ";
     $result = mysqli_query($conn, $sql2);
     $row2 = mysqli_fetch_array($result) ;
          echo '<div class="container my-5">
          <div class="row g-5">
              <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                  From the iBlogs
                </h3>
          
                <article class="blog-post">
                  <h2 class="blog-post-title">'.$row['blog_title'].'</h2>
                  <p class="blog-post-meta"> Uploaded at '.substr($row['blog_created'],0,10).' by <a href="#">'.$row2['user_name'].'</a></p>
          
                  <p>'.$row['blog_des'].'</p>
          
                </article>
          
              </div>
            </div>
          </div>';
     }





?>










<?php
     include '_footer.php';
?>