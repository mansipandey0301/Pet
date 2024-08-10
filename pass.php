<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title> SignUp </title>
</head>
<body>
    <?php require 'partials/nav.php' ?>
<?php 
    $showAlert = false;
    $showError = false;
    $showErrorEmail = false;
if(isset($_POST['submit'])){
   
$servername ="localhost" ;
$username = "root";
$passsword = "";
$database = "user";
$conn = mysqli_connect($servername, $username, $passsword, $database);
    $first_name = $_POST["first_name"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO try
             VALUES('$first_name','$hashedPassword');";
     $result = mysqli_query($conn,$sql);
     if($result){
         $showAlert = true;    
        }
    }
    else{  
        $showError= true ;
    }
// }
// }
?>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error! Please check your password</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showErrorEmail){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Email Already Exists! Please Signup with another E-mail</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div> ';
        }
 ?>
<div class="container my-4">
     <h1 class="text-center">Sign Up to Give Love and Hope</h1>
     <form action="pass.php" method="post">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <input type="submit" name="submit" id="submit" value="Submit">
     </form>
    </div>
</body>
</html>