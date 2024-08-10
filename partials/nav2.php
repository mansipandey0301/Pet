<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.navigation {
    top: 0%;
    width: 100% auto;
    position: sticky;
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
    background-color: #ffffff;
    padding: 10px 20px;
}

.logo a img{
    left: 0;
    height: 70px;
    width: 120px;
}

.navLink {
    /* padding-left: 30px; */
    display: flex;
    align-items: center;
}

.navLink a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    padding-left: 50px auto;
    padding-right:35px;
    position: relative;
}

.navLink a:hover {
    background-color: #fffefe;
    color: #948d8d;
    border-radius: 4px;
}

.dropdown {
    position: flex;
    display: inline-block;
}

.hamburger-menu {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 25px;
    height: 20px;
    cursor: pointer;
}

.hamburger-menu .bar {
    height: 3px;
    background-color: rgb(0, 0, 0);
    border-radius: 2px;
    right: 0%;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ffffff;
}

.dropdown:hover .dropdown-content {
    display: block;
    right: 0%;
}
@media (max-width: 600px) {
    .navigation {
        max-width: 100%;
        flex-direction: column;
    }
    .navLink {
        width: 100%;
        justify-content: space-around;
    }
}
    </style>
</head>
<body>
    <nav class="navigation">
        <div class="logo">
            <a href="index.php"><img src="logo.jpg"></a>
        </div>
        <!-- <div class="search-box">
            <input type="text" id="searchInput" placeholder="Search by Category or City" onkeyup="filterDivs()">

        </div> -->
        <div class="navLink">
            <a href="user.php">Hi, <?php echo $_SESSION['first_name']; ?></a>
            <a href="about.php">ABOUT</a>
            <a href="contact.php">CONTACT</a>             
            <a href="add.php">ADD YOUR'S</a>  
            <a href="logout.php">LOGOUT</a>          
           
        
           
            
            <!-- <div class="dropdown">
                <div class="hamburger-menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="dropdown-content">
                    <a href="dog.php">DOG</a>
                    <a href="cat.php">CAT</a>
                    <a href="#">COW</a>
                    <a href="#">FISH</a>
                    <a href="login.php">LOGOUT</a> 
                </div>
            </div>-->
        </div>
    </nav>
</body>
</html>
