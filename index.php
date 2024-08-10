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
    <link rel="stylesheet" href="stylehome.css">
    <title>Pet</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>
<body>
    <!-- <h1>hello 
        </h1> -->
    <div class="slide">
        <div class="slide_container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="item_img">
                            <img src="images/pic1.jpg" alt="picture">
                        </div>
                     </div>
                  <div class="item">
                    <div class="item_img">
                            <img src="images/pic3.jpg" alt="picture">
                        </div>
                     </div>

                  <div class="item">
                    <div class="item_img">
                            <img src="images/pic4.jpg" alt="picture">
                        </div>
                     </div>

                <div class="item">
                    <div class="item_img">
                            <img src="images/pic6.jpg" alt="picture">
                        </div>
                </div>

                <div class="item">
                    <div class="item_img">
                            <img src="images/pic7.jpg" alt="picture">
                        </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

              <div class="product">
                <h2>Browse Categories</h2>
                <div class="product_container">
                    <div class="item">
                        <div class="item_img">
                            <a href="dog.php"><img src="images/dog.jpg"></a>
                        </div>
                        <div class="item_content">
                            <br><br>
                            <a href="dog.php">Dog</a>
                        </div>
                    </div>
        
                    <div class="item">
                        <div class="item_img">
                            <a href="cat.php"><img src="images/cat.jpg"></a>
                        </div>
                        <div class="item_content">
                            <br><br>
                            <a href="cat.php">Cat</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_img">
                            <a href="cow.php"><img src="images/cow.jpg"></a>
                        </div>
                        <div class="item_content">
                            <br><br>
                            <a href="cow.php">Cow</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item_img">
                            <a href="fish.php"><img src="images/fish.jpg"></a>
                        </div>
                        <div class="item_content">
                            <br><br>
                            <a href="fish.php">Fish</a>
                        </div>
                    </div>
                </div>
            </div>
    <hr>
    <style>
        table {
        width: 100%;
        margin: 0px;
      }
      tr, td {
        padding: 10px;
        text-align: left;
      }
      #rate{
        margin-top: 0px;
        font-size: 25px;
        font-weight: bolder;
        color: black;
        display:inline-block;
      }
      #strike{
        font-size: 15px;
        color: rgb(180, 177, 170);
        margin-left: 3px;
      }
      #off{
        color: rgb(8, 139, 8);
        font-size: 20px;
        display:inline-block;
      }
      #name{
        color: rgb(56, 54, 54);
        font-weight: bold;
        font-size: 20px;
        margin-top: 7px;
        margin-bottom: 0%;
      }
    </style>
      <div class="feed">
        <h2 style="color:rgb(0, 0, 0);">WRITE A REVIEW</h2>
        <div class="feed_form" method="post">
        <form name="submit-googlesheet">
            <input type="text" name="Name" placeholder="Name" required><br>
            <input type="email" name="Email" placeholder="Email ID" required><br>
            <input type="text" name="Number" placeholder="Contact Number" required><br>
            <textarea rows="5" cols="7" name="Review" placeholder="Write your review" required></textarea><br>
            <button type="submit">Submit</button>
        </form>
        </div>
    </div> 
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
 <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
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