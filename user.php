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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> -->
<style>
    <?php include 'styles.css' ?>
</style>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>Pet/Dog</title>
</head>
<body>
<div id='gallery'>
<?php
$servername ="localhost" ;
$username = "root";
$passsword = "";
$database = "pet";
$email= $_SESSION['email'];
$conn = mysqli_connect($servername, $username, $passsword, $database);
     $sql = "SELECT * FROM dog WHERE email= '$email'";
    $result = mysqli_query($conn, $sql);
    $sno = 0; 
 while($row = mysqli_fetch_assoc($result)){

    
   echo  "<div class='pet'>".
    "<img src='". $row['image']."'>".
    "<p class='name'>" .$row['category']."</p>".
    "<p class='age'>". $row['age']." month old</p>".
    "<p class='message'>". $row['message']."</p>".
    "<p class='city'><img src='images/location.png'>". $row['city']."</p>".
    "<button  class='open-modal'>Edit</button>"."<button  class='open-modal'>Delete</button>".
    "</div>";
}

$sql = "SELECT * FROM cat WHERE email= '$email'";
    $result = mysqli_query($conn, $sql);
    $sno = 0; 
 while($row = mysqli_fetch_assoc($result)){

    
   echo  "<div class='pet'>".
    "<img src='". $row['image']."'>".
    "<p class='name'>" .$row['category']."</p>".
    "<p class='age'>". $row['age']." month old</p>".
    "<p class='message'>". $row['message']."</p>".
    "<p class='city'><img src='images/location.png'>". $row['city']."</p>".
    "<button  class='open-modal'>Edit</button>"."<button  class='open-modal'>Delete</button>".
    "</div>";
}
?>
</div>
<?php 
   $showAlert = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/dbconnect.php';
    $name = $_POST["name"];
    $category = $_POST["category"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];
    $Mno = $_POST["Mno"];
    $Tno = $_POST["Tno"];
    // $exists=false;
    $sql = "INSERT INTO `pet` (`name`, `category`, `address`, `pincode`, `Mno`, `Tno`) 
            VALUES('$name', '$category','$address' , '$pincode', '$Mno', '$Tno');";
     $result = mysqli_query($conn,$sql);
            // if($result){
            //    echo "Stored!";    
            // }
     }
        //     else{  
        // echo "Database Not Connected";
        //    }
?>
<div id="myModal" class="modal">
    
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 class="modalHeading">Sign Up to Save a Life</h2>
    <form id="form" action="dog.php" method="POST">
        <!-- <div class="left"> -->
        <p><input type="text" id="name" name="name" placeholder="Your Name" required></p>
        <p><input type="text" id="category" list="petName" name="category" placeholder="Your Intrested in" required></p>
        <datalist id="petName">
            <option value="Brown Labrador">
            <option value="Black Labrador">
            <option value="French Bulldog">
            <option value="Brown Cute Puppy">
            <option value="Black Dog">
            <option value="White Cute Puppy">
            <option value="Black Golden Labrador">
            <option value="Cute puppy">
                       
        </datalist>
        <p><input type="text" id="address" name="address" placeholder="Address" required></p>
        <p><input type="tel" id="pincode" name="pincode" placeholder="PIN Code" maxlength="5" required></p>
        <p><input type="tel" id="Mno" name="Mno" placeholder="Mobile Number" maxlength="10" required></p>
        <p><input type="text" id="Tno" name="Tno" placeholder="Any message" required></p>
        <p><input type="submit" value="Edit" id="submit"  onclick="buy()"></p>
        <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
    <!-- </div> -->
    <!-- <div class="right">
        <img class="payment" src="payment.jpg">
        <p>Your donation helps provide medical care, and loving homes for pets in need. Every contribution makes a big difference. Thank you for your support!</p>
    </div> -->
</form> 

<p id="errorMessage" style="color: red; display: none;">Please Fill All Fields</p>
    </div>
</div>
     <!-- --------------------------------------FOOTER--------------------------------------------------------> 
     <footer>
      <div class="pages">  
          <h3>Customer Care</h3>
          <a href="dog.php">DOG</a>|
          <a href="cat.php">CAT</a>|
          <a href="cow.php">COW</a>|
          <a href="fish.php">FISH</a>
      </div>
      <br>
      <div class="doc">
          <h3>Legal</h3>
          <a href="#">Privacy Policy</a>|
          <a href="#">Terms of Use</a>|
          <a href="#">Refund Policy</a>
      </div>
      <div class="social">
          <h3>Follow Us</h3>
          <a href="https://www.facebook.com/share/RDVfGTz6LkCnmxJN/?mibextid=WC7FNe" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/utkarsh-gupta-793b7a1b7/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/utkarsh_nawabzade?igsh=MWFsZ2x5cjJsbDc2NQ%3D%3D&utm_source=qr"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://x.com/UNawabzade"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      </div>
      <div class="contact">
          <h3>Contact Us</h3>
          <a href="https://api.WhatsApp.com/send?phone=+919721295463"><i class="fa fa-whatsapp"></i></a>
          <a href="tel: +919721295463"><i class="fa fa-phone" aria-hidden="true"></i></a>
          <a href="mailto: utkarsh221156@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
      </div>
      <hr>
  </footer>
  <!-- <script src="partials/scripts.js"></script> -->
  <script>
     // Get the modal
     const modal = document.getElementById("myModal");

// Get the buttons that open the modal
const openModalButtons = document.querySelectorAll(".open-modal");

// Get the <span> element that closes the modal
const closeModalButton = document.querySelector(".close");

// When any button is clicked, open the modal
openModalButtons.forEach(button => {
    button.addEventListener("click", () => {
        modal.style.display = "flex";
    });
});

// When the close button is clicked, close the modal
closeModalButton.addEventListener("click", () => {
    modal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", (event) => {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});
function buy() {
var name = document.getElementById("name").value;
var category = document.getElementById("category").value;
var address = document.getElementById("address").value;
var pincode = document.getElementById("pincode").value;
var Mno = document.getElementById("Mno").value;
var Tno = document.getElementById("Tno").value;

if (name === "" || category === "" || address === "" || pincode === "" || Mno === "" || Tno === "") {
    document.getElementById("errorMessage").style.display = "block";
} else {
    document.getElementById("errorMessage").style.display = "none";
    alert("Thanks for showing your Interest. Owner will Contact you As soon as possible");
}
}
// Search bar
function filterDivs() {
        var input, filter, gallery, divs, nameP, cityP, i, nameTxtValue, cityTxtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        gallery = document.getElementById('gallery');
        divs = gallery.getElementsByClassName('pet');

        for (i = 0; i < divs.length; i++) {
            nameP = divs[i].getElementsByClassName('city')[0]; // Assumes name has class 'name'
            cityP = divs[i].getElementsByClassName('name')[0];   // Assumes age has class 'age'
            if (nameP && cityP) {
                nameTxtValue = nameP.textContent || nameP.innerText;
                cityTxtValue = cityP.textContent || cityP.innerText;

                if (nameTxtValue.toUpperCase().indexOf(filter) > -1 || cityTxtValue.toUpperCase().indexOf(filter) > -1) {
                    divs[i].style.display = "";
                } else {
                    divs[i].style.display = "none";
                }
            }
        }
    }
  </script>

<!-- script for add to cart -->
 <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
//   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
//   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    </body>
    </html>