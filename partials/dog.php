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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
    <title>Pet/Dog</title>
</head>
<body>
    <br><br><br><br><br><br>
    <div class="product">
                    <h2>What's going on your mind?</h2>
                    <br><br>
                    <div class="product_container">
                        <div class="item">
                            <div class="item_img">
                                <img src="dog/image1.jpeg">
                            </div>
                            <div class="item_content">
                                <br>
                                <a>₹5999</a>
                                <h3>Brown Labrador</h3>
                                <button id="image1Btn" onclick="image1()">Buy Now</button>
                            </div>
                        </div>            
                        <div class="item">
                            <div class="item_img">
                                <img src="dog/image2.jpg">
                            </div>
                            <div class="item_content">
                                <br>
                                <a>₹4999</a>
                                <h3>Black Labrador</h3>
                                <button id="image2Btn" onclick="image2()">Buy Now</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_img">
                                <img src="dog/image3.png">
                            </div>
                            <div class="item_content">
                                <br>
                                <a>₹10,999</a>
                                <h3>French Bulldog</h3>
                                <button id="image3Btn" onclick="image3()">Add to Cart</button>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_img">
                                <img src="dog/image4.jpg">
                            </div>
                            <div class="item_content">
                                <br>
                                <a>₹8999</a>
                                <h3>Brown Cute Puppy</h3>
                                <button id="image4Btn" onclick="image4()">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            <!--2nd row  -->
            <hr>
            <div class="product">
                <div class="product_container">
                    <div class="item">
                        <div class="item_img">
                            <img src="dog/image5.jpg">
                        </div>
                        <div class="item_content">
                            <br>
                            <a>₹4599</a>
                            <h3>Black Dog</h3>
                            <button id="image5Btn" onclick="image5()">Add to Cart</button>
                        </div>
                    </div>
        
                    <div class="item">
                        <div class="item_img">
                            <img src="dog/image6.jpg">
                        </div>
                        <div class="item_content">
                            <br>
                            <a>₹6999</a>
                            <h3>White Cute Puppy</h3>
                            <button id="image6Btn" onclick="image6()">Add to Cart</button>
                        </div>
                    </div>

                    <div class="item">
                            <div class="item_img">
                                <img src="dog/image7.jpg">
                            </div>
                            <div class="item_content">
                                <br>
                                <a>₹8999</a>
                                <h3>Black Golden Labrador</h3>
                                <button id="image7Btn" onclick="image7()">Add to Cart</button>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item_img">
                                <img src="dog/image8.jpg">
                            </div>
                            <div class="item_content">
                                <br>
                                <a>₹4999</a>
                                <h3>Cute puppy</h3>
                                <button id="image8Btn" onclick="image8()">Add to Cart</button>
                            </div>
                        </div>
                </div>
            </div>
<hr>

<div class="product">
    <h2>Browse Categories</h2>
    <div class="product_container">

        <div class="item">
            <div class="item_img">
                <a href="cat.html"><img src="images/cat.jpg"></a>
            </div>
            <div class="item_content">
                <br><br>
                <a href="cat.html">CAT</a>
            </div>
        </div>
        <div class="item">
            <div class="item_img">
                <a href="cow.html"><img src="images/cow.jpg"></a>
            </div>
            <div class="item_content">
                <br><br>
                <a href="cow.html">COW</a>
            </div>
        </div>
        <div class="item">
            <div class="item_img">
                <a href="fish.html"><img src="images/fish.jpg"></a>
            </div>
            <div class="item_content">
                <br><br>
                <a href="fish.html">FISH</a>
            </div>
        </div>
    </div>
</div>

    <hr>
     <!-- --------------------------------------FOOTER--------------------------------------------------------> 
     <footer>
      <div class="pages">  
          <h3>Customer Care</h3>
          <a href="dog.html">DOG</a>|
          <a href="#">CAT</a>|
          <a href="#">COW</a>|
          <a href="#">FISH</a>
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
          <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      </div>
      <div class="contact">
          <h3>Contact Us</h3>
          <a href="https://api.WhatsApp.com/send?phone=+919721295463"><i class="fa fa-whatsapp"></i></a>
          <a href="tel: +919721295463"><i class="fa fa-phone" aria-hidden="true"></i></a>
          <a href="mailto: utkarsh221156@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
      </div>
      <hr>
  </footer>
<!-- script for add to cart -->

<script>
  // Function to add item to the cart
  function image1() {
    // Assume you have a product object with details
    var product1 = {
      name: "image1",
      price: 299
    };
    // Create a new list item for the cart
    var cartItem1 = document.createElement("li");
    cartItem1.textContent = product1.name + " - $" + product1.price;
    // Append the item to the cart
    document.getElementById("image1").appendChild(cartItem1);
    // Change the button text to "Item Added"
    var image1Btn = document.getElementById("image1Btn");
    image1Btn.textContent = "Item Added";
    image1Btn.disabled = true; // Optional: Disable the button after adding an item
    image1Btn.classList.add("added"); // Optional: Add a CSS class for styling
  }
                           // image2 
   // Function to add item to the cart
   function image2() {
    // Assume you have a product object with details
    var product2 = {
      name: "image2",
      price: 299
    };
    // Create a new list item for the cart
    var cartItem2 = document.createElement("li");
    cartItem2.textContent = product2.name + " - $" + product2.price;
    // Append the item to the cart
    document.getElementById("image2").appendChild(cartItem2);
    // Change the button text to "Item Added"
    var image2Btn = document.getElementById("image2Btn");
    image2Btn.textContent = "Item Added";
    image2Btn.disabled = true; // Optional: Disable the button after adding an item
    image2Btn.classList.add("added"); // Optional: Add a CSS class for styling
  }
                          // image3 
   // Function to add item to the cart
   function image3() {
    // Assume you have a product object with details
    var product3 = {
      name: "image3",
      price: 399
    };
    // Create a new list item for the cart
    var cartItem3 = document.createElement("li");
    cartItem3.textContent = product3.name + " - $" + product3.price;
    // Append the item to the cart
    document.getElementById("image3").appendChild(cartItem3);
    // Change the button text to "Item Added"
    var image3Btn = document.getElementById("image3Btn");
    image3Btn.textContent = "Item Added";
    image3Btn.disabled = true; // Optional: Disable the button after adding an item
    image3Btn.classList.add("added"); // Optional: Add a CSS class for styling
  }
                          // image4 
   // Function to add item to the cart
   function image4() {
    // Assume you have a product object with details
    var product4 = {
      name: "image4",
      price: 299
    };
    // Create a new list item for the cart
    var cartItem4 = document.createElement("li");
    cartItem4.textContent = product4.name + " - $" + product4.price;
    // Append the item to the cart
    document.getElementById("image4").appendChild(cartItem4);
    // Change the button text to "Item Added"
    var image4Btn = document.getElementById("image4Btn");
    image4Btn.textContent = "Item Added";
    image4Btn.disabled = true; // Optional: Disable the button after adding an item
    image4Btn.classList.add("added"); // Optional: Add a CSS class for styling
  }
                          // image5 
   // Function to add item to the cart
   function image5() {
    // Assume you have a product object with details
    var product5 = {
      name: "image5",
      price: 599
    };
    // Create a new list item for the cart
    var cartItem5 = document.createElement("li");
    cartItem5.textContent = product5.name + " - $" + product5.price;
    // Append the item to the cart
    document.getElementById("image5").appendChild(cartItem5);
    // Change the button text to "Item Added"
    var image5Btn = document.getElementById("image5Btn");
    image5Btn.textContent = "Item Added";
    image5Btn.disabled = true; // Optional: Disable the button after adding an item
    image5Btn.classList.add("added"); // Optional: Add a CSS class for styling
  }
                          // image6 
   // Function to add item to the cart
   function image6() {
    // Assume you have a product object with details
    var product6 = {
      name: "image6",
      price: 299
    };
    // Create a new list item for the cart
    var cartItem6 = document.createElement("li");
    cartItem6.textContent = product6.name + " - $" + product6.price;
    // Append the item to the cart
    document.getElementById("image6").appendChild(cartItem6);
    // Change the button text to "Item Added"
    var image6Btn = document.getElementById("image6Btn");
    image6Btn.textContent = "Item Added";
    image6Btn.disabled = true; // Optional: Disable the button after adding an item
    image6Btn.classList.add("added"); // Optional: Add a CSS class for styling
  }
                          // image7 
   // Function to add item to the cart
   function image7() {
    // Assume you have a product object with details
    var product7 = {
      name: "image7",
      price: 799
    };
    // Create a new list item for the cart
    var cartItem7 = document.createElement("li");
    cartItem7.textContent = product7.name + " - $" + product7.price;
    // Append the item to the cart
    document.getElementById("image7").appendChild(cartItem7);
    // Change the button text to "Item Added"
    var image7Btn = document.getElementById("image7Btn");
    image7Btn.textContent = "Item Added";
    image7Btn.disabled = true; // Optional: Disable the button after adding an item
    image7Btn.classList.add("added"); // Optional: Add a CSS class for styling
  }
                          // image8 
   // Function to add item to the cart
   function image8() {
    // Assume you have a product object with details
    var product8 = {
      name: "image8",
      price: 899
    };
    // Create a new list item for the cart
    var cartItem8 = document.createElement("li");
    cartItem8.textContent = product8.name + " - $" + product8.price;
    // Append the item to the cart
    document.getElementById("image8").appendChild(cartItem8);
    // Change the button text to "Item Added"
    var image8Btn = document.getElementById("image8Btn");
    image8Btn.textContent = "Item Added";
    image8Btn.disabled = true; // Option8l: Disable the button after adding an item
    image8Btn.classList.add("added"); // Optional: Add a CSS class for styling
  }
</script>
    <ul id="image1"></ul>
    <ul id="image2"></ul>
    <ul id="image3"></ul>
    <ul id="image4"></ul>
    <ul id="image5"></ul>
    <ul id="image6"></ul>
    <ul id="image7"></ul>
    <ul id="image8"></ul>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>