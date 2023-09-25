<?php
     session_start();
?>


<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/blogwithadmin">iBlogs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/blogwithadmin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>


            <?php
                 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                    echo '
                    <!-- Example single danger button -->
                    <div class="btn-group me-5">
                      <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      '.$_SESSION['username'].'
                      </button>
                      <ul class="dropdown-menu me-5 ">
                        ';
                        
                        if($_SESSION['isAdmin'] == 1){
                            echo '
                            <li><a class="dropdown-item" href="./admin.php">Admin Panel</a></li>
                            // <li><a class="dropdown-item" href="partials_composeBlog.php">Write a Blog</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="partials/logout.php" class="dropdown-item ml-2">Logout</a></li>
                          </ul>
                        </div> ';
                        } else{
                            echo '</a></li>
                            <li><a class="dropdown-item" href="/blogwithadmin/profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="/blogwithadmin/partials/_composeBlog.php">Write a Blog</a></li>
                            <li><a class="dropdown-item" href="/blogwithadmin/myblogs.php">My Blog</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a href="/blogwithadmin/partials/logout.php" class="dropdown-item ml-2">Logout</a></li>
                          </ul>
                        </div> ';
                        }

                     
                    }
                    else{
                        echo '<button type="button" class="btn btn-outline-light mx-2" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                    <button type="button" class="btn btn-outline-light mx-2" data-bs-toggle="modal"
                        data-bs-target="#registerModal">Register</button>';
                    }
            ?>



        </div>
    </div>
</nav>




<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login to iBlogs</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action='partials/handleLogin.php' method="POST">
                    <div class="mb-3">
                        <label for="loginUser" class="form-label">Username</label>
                        <input type="text" class="form-control" id="loginUser" name="loginUser"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="loginPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPass" name="loginPass">
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Register to iBlogs</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="partials/handleRegister.php " method="POST">
                    <div class="mb-3">
                        <label for="regUsername" class="form-label">Choose a username</label>
                        <input type="text" class="form-control" id="regUsername" name="regUsername"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="regUserPass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="regUserPass" name="regUserPass">
                    </div>
                    <div class="mb-3">
                        <label for="regUserCPass" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="regUserCPass" name="regUserCPass">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<?php
     if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
        echo '<div class="alert alert-success alert-dismissible fade show  my-0" role="alert">
                    <strong>Success!</strong> You can now login.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
        }

?>