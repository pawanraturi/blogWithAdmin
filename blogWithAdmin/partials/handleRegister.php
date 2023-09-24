<?php
    $showError = "false";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
         include '_dbconnect.php';
        $username = $_POST['regUsername'];
        $password = $_POST['regUserPass'];
        $Cpassword = $_POST['regUserCPass'];

        //Check Whether this email exits in DB or not

        $existSql = "select * from `users` where user_name = '$username' ";
        $result = mysqli_query($conn, $existSql);
        $numRows = mysqli_fetch_assoc($result);


        if($numRows > 0){
            $showError = "Email already in use";
        }else{
            if($password == $Cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                
                $sql = "INSERT INTO `users` (`user_name`, `user_password`, `is_admin`, `user_created`) VALUES ('$username', '$hash', '0', current_timestamp());";
                $result = mysqli_query($conn, $sql);

                if($result){
                    $showAlert = true;
                    header('Location: /blogWithAdmin/index.php?signupsuccess=true');
                    exit();
                }
            }else{
                $showError = "Passwords do not match";
            }
        }
        header('Location: /blogWithAdmin/index.php?signupsuccess=false&error='.$showError);
        



     }
















?>