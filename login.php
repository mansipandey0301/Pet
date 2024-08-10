<?php
session_start();
?>
<?php
error_reporting(E_ALL & ~E_WARNING);
ini_set('display_errors', 'Off');
?>

<?php

include 'partials/nav.php';
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
$servername ="localhost" ;
$username = "root";
$passsword = "";
$database = "user";
$conn = mysqli_connect($servername, $username, $passsword, $database);
    $email = $_POST["email"];
    $password = $_POST["password"];  

    // $email_search= " select * from usersignup where email= '$email'";
    // $query= mysqli_query($conn,$email_search);
    // $email_count = mysqli_num_rows($query); 
    // if($email_count){
    //     $email_pass= mysqli_fetch_assoc($query);
    // }
  
    $sql = "Select * from usersignup where email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $email_pass= mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result);
    $_SESSION['first_name'] = $email_pass['first_name'];
    $_SESSION['email'] = $email_pass['email'];
    $_SESSION['city'] = $email_pass['city'];
    if ($num == 1){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: index.php");
        } 
    else{
        $showError = true;
    }
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
   <style>
    .alert {
        background-color: #ff9a9a;
    height: 3%;
    /* width: 100%; */
    padding: 10;
}
.alert strong{
    font-size: 19px;
}
   </style>
<title>Login</title>
</head>
<body>
    <?php
    // if($login){
    // echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    //     <strong>Success!</strong> You are logged in
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //     </button>
    // </div> ';
    // }
    if($showError){
    echo ' <div class="alert" role="alert">
        <strong>Please check username or password!</strong> 
        </button>
    </div> ';
    }
   
    ?>

<div class="container">
    <div class="login-form">
        <form action="login.php" method="POST">
            <div>
                <Email: for="email">Email:</label>
                <input  type="text" class="form-control" id="email" name="email"  required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
            <br>
            <a href="signup.php">Don't Have an account?</a>
        </form>
    </div>
    <div class="image-section"></div>
</div>
</body>
</html>
