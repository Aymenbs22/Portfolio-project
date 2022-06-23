<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/logincss.css">
    <link rel="icon" href="images/logo.png">
    <script defer src="totops.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Take an appointment</title>
</head>
<body>
    <header>
        <a href="homepage.php" class="logo">Barber</a>
        <nav class="navigation">
        <a href="service.php">Products</a>
            <a href="rdv.php">Take an appointment</a>
            <a href="contact.html">Contact Us</a>
            <a href="panier.php">Cart</a>
            <a href="panier.php">Reserved Products</a>
            <a href="deconnexion.php">Logout</a>
            <label for="show" class="show-btn">Login</label>
        </nav>
    </header>

    <form  action="ControleUser.php" method="POST">
    <section class="main4">
    <div class="signupmove">
    
            <label>Name:</label><br>
            <input type="text" name="name"><br>
            
            <label>First name:</label><br>
            <input type="text" name="first-name"  id="" ><br>

            <label>Age:</label><br>
            <input type="text" name="age"  ><br>

            <label>Mail:</label><br>
            <input type="text" name="mail"   ><br>

            <label>Password:</label><br>
            <input type="password" name="psw"><br>
            
            <label>Number:</label><br>
            <input type="text" name="number" ><br>
            
         
         <br>
              <input type="submit"  value="Submit" name="submit" id="login-form-submit" class=""> <!-- submitlogin -->
        
         </div>
    </section>
    
    </form>










 

















    <?php /* var_dump($_SESSION['mail']) */ ;?>
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
    <div class="center">
        <input type="checkbox" id="show">
        <div class="container">
           <label for="show" class="close-btn fas fa-times" title="close"></label>
           <div class="text">
              Login Form
           </div>
           <form action="#">
              <div class="data">
                 <label>Email or Phone</label>
                 <input type="text" required>
              </div>
              <div class="data">
                 <label>Password</label>
                 <input type="password" required>
              </div>
              <div class="forgot-pass">
                 <a href="#">Forgot Password?</a>
              </div>
              <div class="btn">
                 <div class="inner"></div>
                 <button type="submit">login</button>
              </div>
              <div class="signup-link">
                 Not a member? <a href="#">Signup now</a>
              </div>
              
           </form>
        </div>
     </div>
     
</body>
</html>
