



<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST['loginUser'];
    $pass = $_POST['loginPass'];

    $sql = "Select * from users where user_name='$username'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['user_password'])){
        //    if($row['is_admin'])
            // $log = $row['is_admin'];
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['isAdmin'] = $row['is_admin'] ;
            $_SESSION['user_id'] = $row['user_id'];

        } 
        header("Location: /blogWithAdmin/index.php");  
    }
    header("Location: /blogWithAdmin/index.php");  
}

?>