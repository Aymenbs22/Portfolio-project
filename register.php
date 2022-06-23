<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <!-- <link rel="stylesheet" href="fonts.css"> -->
    <link rel="icon" href="images/logo.png">
    <script defer src="totops.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BARBER.TN</title>
</head>
<body>
<header>
        <a href="homepage.php" class="logo">BARBER</a>
        <nav class="navigation">
            <a href="service.php">Products</a>
            <a href="rdv.php">Take an appointment</a>
            <a href="contact.html">Contact Us</a>
            <a href="panier.php">Cart</a>
            <a href="resprods.php">Reserved Products</a>
            <a href="deconnexion.php">Logout</a>
        </nav>
    </header>
    <div>
<form action="/action_page.php">
  <div class="container">
    <br>
    <br>

    <h1>Register</h1>
    <hr>
<form action="controlRegister.php" method=>
    <label for="Fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter Email" name="Fname" required>

    <label for="Lname"><b>Last Name</b></label>
    <input type="password" placeholder="Enter Password" name="Lname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw"  required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat"  required>


    <label for="Age"><b>Age</b></label>
    <input type="text" placeholder="Age" name="Age" required>
    <hr>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  </form>
  <label for="show" class="show-btn">Login</label>
</form>
</div>

<div class="center">
        <input type="checkbox" id="show">

        <div class="container">
           <label for="show" class="close-btn fas fa-times" title="close"></label>
           <div class="text">
              Login Form
           </div>



           <form action="controleLogin.php" method="POST">

              <!-- they will send a data of logiin to controleLogin.php with POST (because it is private data for security ) -->

              <div class="data">
                  <!-- all input we make him name to call him later on (controleLogin.php) -->
   
                 <label>Email or Phone</label>
                 <input type="text" required name="mail" >
              </div>
              <div class="data">
                 <label>Password</label>
                 <input type="password" required name="password">
              </div>
              <div class="forgot-pass">
                 <a href="#">Forgot Password?</a>
              </div>
              <div class="btn">
                 <div class="inner"></div>
                 <button type="submit">login</button>
              </div>
              <div class="signup-link">
                 Not a member? <a href="signup.php">Signup now</a>
              </div>
           </form>
        </div>
     </div>

<footer class="footer">
        <p class="footer-title"><span>Holberton School PFA</span></p>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>
    </footer>
</body>
</html>
