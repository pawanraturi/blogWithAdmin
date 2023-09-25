<?php
     include '_header.php';
     include '_nav.php';
     
     
     if($_SERVER['REQUEST_METHOD']== 'POST'){

        include '_dbconnect.php';

        $blogTitle = test_input($_POST['blogTitle']);
        $blogContent = test_input($_POST['blogContent']);

        $userId = $_SESSION['user_id'];

        $sql = "INSERT INTO `blogs` ( `user_id`, `blog_title`, `blog_des`, `blog_created`) VALUES ( '$userId', '$blogTitle', '$blogContent', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        // $selectSingleBlog = "select * from blogs where blog_title = '$blogTitle'";
        // $result2 = mysqli_query($conn, $selectSingleBlog);


        // $row = mysqli_fetch_assoc($result2);


        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your blog is published you can check <a href="/blogwithadmin/partials/singleBlog.php?blogSno=  "> here</a>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

    }

    function test_input($data){
      // $data = trim($data);
      // $data = stripslashes($data);
      $data = htmlspecialchars($data);

      // $data = str_replace(",", "&comma", $data);
      // $data = str_replace(":", "&colon", $data);
      // $data = str_replace(";", "&semi", $data);
      // $data = str_replace("`", "&grave", $data);
      return $data;
    }
     
?>






     <?php



     if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
        echo '<div class="container my-5 ">
        <form action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">
          <div class="mb-3">
            <label for="blogTitle" class="form-label"><h2>Blog Title</h2></label>
            <input type="text" class="form-control" id="blogTitle" name="blogTitle" required >
          </div>
          <div class="mb-3">
          <label for="blogContent" class="form-label"><h2>Blog Description</h2></label>
          <textarea class="form-control" id="summernote" name="blogContent" rows="3"></textarea>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        ';
     } else{
        echo'<div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold text-body-emphasis">404    </h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Login</button>
            <a href="../index.php" ><button type="button" class="btn btn-outline-secondary btn-lg px-4">Go Home</button></a>
            
          </div>
        </div>
      </div>';
     }



?>
     <style>
     body{
        background-color: powderblue;
     }
     </style>






<?php
     
     include '_footer.php';
?>