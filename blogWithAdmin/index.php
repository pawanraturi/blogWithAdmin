<?php
     include 'partials/_dbconnect.php';
     include 'partials/_header.php';
     include 'partials/_nav.php';

  
//   <div class="alert alert-warning alert-dismissible fade show" role="alert">
//   <strong>Holy guacamole!</strong> You should check in on some of those fields below.
//   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>



?>






<?php
     $sql = "select * from blogs";
     $result= mysqli_query($conn,$sql);
     echo '
     <div class="container-fluid">
     <div class="row">';    



     while($row = mysqli_fetch_assoc($result)){
      $sqlBlogUser = 'select * from users where user_id = '.$row["user_id"];
      $result2 = mysqli_query($conn,$sqlBlogUser);
      $row2 = mysqli_fetch_assoc($result2);

        echo '
        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
          <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDABQODxIPDRQSEBIXFRQYHjIhHhwcHj0sLiQySUBMS0dARkVQWnNiUFVtVkVGZIhlbXd7gYKBTmCNl4x9lnN+gXz/2wBDARUXFx4aHjshITt8U0ZTfHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHz/wAARCADGATwDASIAAhEBAxEB/8QAGQABAQEBAQEAAAAAAAAAAAAAAAIDBAEF/8QAMhABAAECBQMDAgUCBwAAAAAAAAECAwQRFVLRM5GxEiFyMWETIiNRoUHBBRQ1QnFzgf/EABYBAQEBAAAAAAAAAAAAAAAAAAACAf/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AGFopt4a3FMZfliWqLHQt/GPC1JAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGN3C27tfqqiM8v2bAIsdC38Y8LRY6Fv4x4WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACLHQt/GPC0WOhb+MeFgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAix0LfxjwtFjoW/jHhYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIsdC38Y8LRY6Fv4x4WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACLHQt/GPC0WOhb+MeFgAAAAAAAAAAAADebdP+TpuZfmmvLP7E4S/ETP4f0+8AwGteHu26PXVRlT/wA/R7Thb1VEVU0ZxMZx7x7gxGluxcu5+inOI+s55Fyxcten10zHq+n3BmNq8NeopmqqjKI+vvHsyiJmcojOZB4Na8Ndt0zVXTlEfeHtWFvU0TVNHtEZz7x7AxGtGGu10xVTRnTP0nOEXLdVuqaa4ymP6AkAAAAAAAAAAAAAEWOhb+MeFosdC38Y8LAAAAAAAAAAAAB01f6fR/2f2b5zqse/2/h88B1WJztYrP3zjP8Al02rMUXbc025qjKP1Zr8Q+YA7a6Kr1iaLXvVTcmaqf7r6U4P8WY/L6s/65OS3+D6f1fxM8/9uT2/dpueimimYoojKM/qDpuRXai7VGGiIqiYmv155w5sJVTRiaJqnKP3YgOirC3aas7sZUzV71Z/y7KLUW7lz9KYj0zHrqrzmp8sB2VWrl3CWItx6svVnGf3RjJym3RnE1UURFUx+7O5ciqzaoiJzozz/wDZZAAAAAAAAAAAAAAAix0LfxjwtFjoW/jHhYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIsdC38Y8LRY6Fv4x4WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACLHQt/GPC0WOhb+MeFgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAix0LfxjwtFjoW/jHhYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIsdC38Y8LRY6Fv4x4WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD51H+K2LdFNE03M6YiJyiOXur4fZd7RyA01fD7LvaOTV8Psu9o5ADV8Psu9o5NXw+y72jkANXw+y72jk1fD7LvaOQA1fD7LvaOTV8Psu9o5ADV8Psu9o5NXw+y72jkANXw+y72jk1fD7LvaOQA1fD7LvaOTV8Psu9o5ADV8Psu9o5NXw+y72jkANXw+y72jk1fD7LvaOQA1fD7LvaOTV8Psu9o5ADV8Psu9o5NXw+y72jkANXw+y72jk1fD7LvaOQA1fD7LvaOTV8Psu9o5ADV8Psu9o5NXw+y72jkANXw+y72jk1fD7LvaOQA1fD7LvaOTV8Psu9o5ADV8Psu9o5NXw+y72jkANXw+y72jk1fD7LvaOQA1fD7LvaOTV8Psu9o5AH//2Q==" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">'.$row['blog_title'].'</h5>
            <p class="card-text">'.substr($row['blog_des'],0,100)."...".'</p>
            <a href="partials/singleBlog.php?blogSno='.$row['user_id'].'" class="btn btn-primary">Read More</a>
            <span>by '.$row2['user_name'].' </span>
          </div>
        </div>
        </div>';

     }
     echo '</div></div>';


?>






<?php   
     include 'partials/_footer.php';

?>