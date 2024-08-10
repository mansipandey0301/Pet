<html>
    <head>
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <style>
            <?php require "styles.css"?>
    </style>

    </head>
<body>
<div class='gallery'>
<?php
$servername ="localhost" ;
$username = "root";
$passsword = "";
$database = "pet";
$conn = mysqli_connect($servername, $username, $passsword, $database);
     $sql = "SELECT * FROM dog";
    $result = mysqli_query($conn, $sql);
    $sno = 0; 
 while($row = mysqli_fetch_assoc($result)){

    
   echo  "<div class='pet'>".
    "<img src='". $row['image']."'>".
    "<p class='name'>" .$row['category']."</p>".
    "<p class='age'>". $row['age']." Year</p>".
    "<p class='message'>". $row['message']."</p>".
    "<p class='city'><img src='images/location.png'>". $row['city']."</p>".
    "<button  class='open-modal'>Buy Now</button>".
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
            if($result){
               echo "Stored!";    
            }
     }
        //     else{  
        // echo "Database Not Connected";
        //    }
?>
<div id="myModal" class="modal">
    
    <div class="modal-content">
        <span class="close">&times;</span>
    <form id="form" action="dog1.php" method="POST">
        <h2>Order</h2>
        <div class="left">
        <p><input type="text" id="name" name="name" placeholder="Name" required></p>
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
        <p><input type="submit" value="Want to adopt" id="submit"  onclick="buy()"></p>
        <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
    </div>
    <div class="right">
        <img class="payment" src="payment.jpg">
    </div>
</form> 

<p id="errorMessage" style="color: red; display: none;">Please Fill All Fields</p>
    </div>
</div>
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
        alert("I have Received your order for pet, My team contact you within 15min.");
    }
}
</script>
</body>
</html>