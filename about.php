<?php
session_start();
if(!isset($_SESSION['first_name'])){
    echo "You are logged out.";
    header('location: login.php');
}
?>
<?php
include "partials/nav2.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0">
    <title>U-Cart | About Us</title>
    <link rel="stylesheet" href="stylehome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       <!-- -------------------------------------------ABOUT US--------------------------------------------------------->
    <div class="about_us" style="padding-top:10px;">
        <h2>Welcome to Pet Savers Hub</h2>
        <div class="about_content">
            <p>A dedicated platform where compassion meets action. Our mission is to connect loving individuals with pets in need of homes and to provide a trusted space for donations that support animal welfare.</p>
        </div>
        <hr>
        <h2>Who We Are</h2>
        <p>PetSaversHub was founded by a team of passionate animal lovers committed to making a difference in the lives of pets. We believe every animal deserves a safe, loving, and permanent home. Our platform bridges the gap between rescue organizations, shelters, and individuals looking to adopt or donate.</p>
        <hr>
        <h2>What We Do</h2>
        <p>Adoption Services: We make it easy for you to find your perfect pet. Our extensive database features pets of all types and sizes from various shelters and rescue groups. You can browse through profiles, learn about each pet’s background, and find the one that best matches your home and lifestyle.</p>
        <p>Donation Platform: Your generosity helps save lives. Donations made through our platform go directly to shelters and rescue organizations to support their efforts in providing medical care, food, and safe housing for animals in need.</p>
        <p>Community Engagement: We foster a community of animal advocates and provide resources and support for pet owners and adopters. Our blog, forums, and events are designed to educate, connect, and inspire.</p>
        <hr>
        <h2>Our Vision</h2>
        <p>We envision a world where every pet has a loving home and where communities come together to support and care for animals. By facilitating adoptions and encouraging donations, we aim to reduce the number of homeless pets and improve their quality of life.</p>
        <h2>Join Us</h2>
        <p>Whether you’re looking to adopt a new family member or contribute to the welfare of animals, [Your Website Name] is here to help. Together, we can create a better future for pets and the people who love them.</p>
        <p>Thank you for being part of our community and for making a difference in the lives of animals.</p>
    </div>
    <!-- --------------------------------------------FEED--------------------------------------------------------->
    <div class="feed">
        <h2 style="color:rgb(185, 51, 51);">WRITE A REVIEW</h2>
        <div class="feed_form" method="post">
        <form name="submit-googlesheet">
            <input type="text" name="Name" placeholder="Name"><br>
            <input type="email" name="Email" placeholder="Email ID"><br>
            <input type="text" name="Number" placeholder="Contact Number"><br>
            <textarea rows="5" cols="7" name="Review" placeholder="Write your review"></textarea><br>
            <button type="submit">Submit</button>
        </form>
        </div>
    </div>
    <!-- --------------------------------------------FOOTER-------------------------------------------------------->
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

   
<script type="text/javascript">
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzmY7HJmUEupsd8UBLj-aTxEsPcKQEWFYaxFA44IcIYrYCjanY1WcTF4zyKYXFQubtbTA/exec'
            const form = document.forms['submit-googlesheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks you for your valuable feedback!"))
                .catch(error => console.error('Error!', error.message))
            })
          
</script>
</body>
</html>