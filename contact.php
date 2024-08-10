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
<div class="contact_container" style="padding-top:10px;">
        <h2>Contact Us</h2>
        <div class="contact_content">
            <p>Have a question, craving, or collaboration in mind? We'd love to hear from you! Reach out to us for anything related to food, recipes, partnerships, or just to say hello. Your feedback is invaluable, and we're here to assist you.</p>
            <hr>
            <h3>How to Reach Us:</h3>
            <p><b>☎ +919721295463</b></p>    <p><b>📧 utkarsh221156@gmail.com</b></p>
            <hr>
            <h3>Customer Support:</h3>
            <p>For inquiries related to orders, recipes, or any assistance you may need, our customer support team is ready to help. Drop us an email or give us a call.</p>
        </div>

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