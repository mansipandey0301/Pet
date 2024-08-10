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
    $passcheck = false;
if(isset($_POST['submit'])){
   
$servername ="localhost" ;
$username = "root";
$passsword = "";
$database = "user";
$conn = mysqli_connect($servername, $username, $passsword, $database);
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["mobileNumber"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    if($password==$cpassword){
        $passcheck = true;
    }
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // $ChashedPassword = password_hash($cpassword, PASSWORD_DEFAULT);
    $DOB = $_POST["DOB"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $pinCode = $_POST["pinCode"];
    // $exists=false;
    $sql1 = "Select * from usersignup where email='$email'";
    $result1 = mysqli_query($conn, $sql1);
    // $email_pass= mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result1);
    if($num==1){
        $showErrorEmail= true ;
    }
    else{
        if($passcheck){
            $sql = "INSERT INTO usersignup VALUES('','$first_name','$last_name','$email','$mobileNumber','$password', '$DOB','$address','$city','$pinCode');";
     $result = mysqli_query($conn,$sql);
    //  $result = $conn->query($sql);
     if($result){
         $showAlert = true;    
        }
    }
    else{  
        $showError= true ;
    }
}
}
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
     <form action="signup.php" method="post">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>            
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>            
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>            
        </div>
        <div class="form-group">
            <label for="mobileNumber">Mobile Number</label>
            <input type="number" class="form-control" id="mobileNumber" name="mobileNumber" required>            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword" required> 
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
        <div class="form-group">
            <label for="DOB">Date of Birth</label>
            <input type="date" class="form-control" id="DOB" name="DOB" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="pinCode">Pin Code</label>
            <input type="number" class="form-control" id="pinCode" name="pinCode" required>
        </div>
        <input type="submit" name="submit" id="submit" value="Submit">
     </form>
    </div>
</body>
</html>