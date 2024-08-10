<?php
session_start();
if(!isset($_SESSION['first_name'])){
    echo "You are logged out.";
    header('location: login.php');
}
?>
<?php
include 'partials/nav2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Your's</title>
<style>
    /* styles.css */
.modal {
    /* display: none; */
    position: fixed;
    left: 0;
    /* margin-top: 2%; */
    width: 100%;
    height: auto;
    background-color: white;
    z-index: 1;
}

.modal-content {
    background-color: #fefefe;
    margin: 2% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    height: auto;
    /* max-width: 600px; */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

input[type="text"], input[type="email"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-top: 8px;
    margin-bottom: 16px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.success{
     background-color: lightblue;
    height: 7%;
    /* width: 100%; */
    padding: 10;
}
.alert strong{
    padding-left: 50px;
    font-size: 19px;
}
</style>
</head>
<body>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    // $name = $_POST["name"];
    // $address = $_POST["address"];
    // $city = $_POST["city"];
    // $pinCode = $_POST["pinCode"];
    $category = $_POST["category"];
    $age = $_POST["age"];
    $message = $_POST["message"];   
    $pet = $_POST["pet"];
    $name = $_SESSION['first_name'];
    $email = $_SESSION['email'];
    $city = $_SESSION['city'];
    // Directory where the uploaded file will be saved
    $uploadDirectory = $pet;
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    $uploadPath = $uploadDirectory . $newFileName;
    if(move_uploaded_file($fileTmpPath, $uploadPath)){
        // Insert path into database
        $sql= "INSERT INTO $pet(name, email, city, image, category, age, message) VALUES ('$name','$email','$city','$uploadPath','$category','$age','$message')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo ' <div class="success" role="alert">
                  <strong>Thanks for Adaption</strong> 
                    </div> ';
        }else{
            echo "File upload failed, please try again.";
        }
    } 
    else {
        echo "Error uploading file.";
    }
}
?>
<div id="modalDog" class="modal">
    <div class="modal-content">
        <form  action="add.php" id="dogForm" method="POST"  enctype="multipart/form-data">
            <h2>Add pet details</h2>
            <!-- <input type="text" id="name" name="name" placeholder=$name required> -->
            <!-- <input type="text" id="address" name="address" placeholder="Address" required> -->
            <!-- <input type="text" id="city" name="city" placeholder="City" required> -->
            <!-- <input type="number" id="pinCode" name="pinCode" placeholder="Pin Code" required> -->
            <input type="file" id="image" name="image" placeholder="Dog image" required>
            <label for="Pet">Pet</label>
            <select  id="pet" name="pet" placeholder="Pet">
                <option value="dog">Dog</option>
                <option value="Cow">Cow</option>
                <option value="Cat">Cat</option>
                <option value="Fish">Other</option>
            </select>           
            <input type="text" id="category" name="category" placeholder="Category" required>
            <input type="number" id="age" name="age" placeholder="Pet's Age(in month)" required>
            <input type="text" id="message" name="message" placeholder="Why are you donate" required>
            <button type="submit" name="submit" id="submit">Submit</button>
        </form>
        <p id="thankYouDog" style="display: none;">Thanks for submit the details for your dog</p>
    </div>
</div>

 <!-- <script> 
// script.js
    document.getElementById('dog').addEventListener('click', function() {
        document.getElementById('modalDog').style.display = 'block';
    });
    
    document.querySelector('.close').addEventListener('click', function() {
        document.getElementById('modalDog').style.display = 'none';
    });
    
    document.getElementById('dogForm').addEventListener('submit', function(eventDog) {
        eventDog.preventDefault(); 
        Prevent the form from submitting traditionally
        document.getElementById('dogForm').style.display = 'none';
        document.getElementById('thankYouDog').style.display = 'block';
    });
    
    // Close the modal if clicked outside of it
    window.onclick = function(eventDog) {
        const modalDog = document.getElementById('modalDog');
        if (eventDog.target === modalDog) {
            modalDog.style.display = 'none';
        }
    };
     </script> -->
</body>
</html>
