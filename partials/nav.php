<style>
  /* Styles for the navbar */
.navbar {
    background-color: #ffffff; /* Dark background color */
    color: rgb(14, 6, 6);
    display: flex;
    justify-content: space-between; /* Align children (logo and nav links) on opposite sides */
    align-items: center;
    padding: 0 20px; /* Padding on the left and right */
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar a {
    color: rgb(4, 2, 2);
    text-decoration: none; /* Remove underline from links */
    padding: 14px 20px; /* Vertical and horizontal padding */
    font-size: 17px;
}
.navbar a:hover {
    color: #4a54e1;
}

.nav-links {
    display: flex; /* Display links in a row */
}

.logo img {
    height: 50px; /* Control the size of the logo */
    vertical-align: middle; /* Align the logo vertically with the links */
}

/* Responsive adjustments */
@media (max-width: 600px) {
    .navbar {
        flex-direction: column;
    }
    .nav-links {
        width: 100%;
        justify-content: space-around;
    }
}

</style>
<nav class="navbar">
        <a href="login.php" class="logo">
            <!-- Logo image or text -->
            <img src="logo.jpg" alt="Company Logo" style="height: 50px;">
        </a>
        <div class="nav-links">
            <a href="abouthome.php">About Us</a>
            <a href="contacthome.php">Contact Us</a>
            <!-- <a href="#about">GO-PRO</a>
            <a href="#contact">LOGOUT</a> -->
        </div>
    </nav>