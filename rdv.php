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
        <a href="homepage.php" class="logo">BARBER</a>
        <nav class="navigation">
        <a href="service.php">Products</a>
            <a href="rdv.php">Take an appointment</a>
            <a href="contact.html">Contact Us</a>
            <a href="panier.php">Cart</a>
            <a href="resprods.php">Reserved Products</a>
            <a href="deconnexion.php">Logout</a>
            <label for="show" class="show-btn">Login</label>
        </nav>
    </header>
    
    <section class="main2">
    <div class="rdvmove">
    <section class="rdvclass23">
    
        <form action="controleRDV.php" method="post"  enctype="multipart/form-data">
        <table>
             <tr>
             <td><label for="nom">Name</label>:</td>
                <td> <input name="nom" type="text" required />
                </td>
            </tr> 
          <!--   <tr>
                <td><label for="date">date</label>:</td>
                <td> <input name="date" type="text" />
                </td> -->
            </tr>
            <tr>
                <td><label for=" time">Date of appointement</label>:</td>
                <td><input class="btn-default" size="30" name="rdate" type="date" autocomplete="off"></td>
                <br>
                <label for="pet-select">Type of beard styles:</label>

                <select name="pets" id="pet-select">
                    <option value="">--Please choose an option--</option>
                    <option value="dog">Buzz Cut (It Takes 30-40min)</option>
                    <option value="cat">Crew Cut (It Takes 30-40min)</option>
                    <option value="hamster">Ivy League (It Takes 30-40min)</option>
                    <option value="parrot">Caesar Haircut (It Takes 30-40min)</option>
                    <option value="spider">Military Haircut (It Takes 30-40min)</option>
                    <option value="goldfish">French Crop (It Takes 30-40min)</option>
                </select>
            </tr>
            <td><label for=" time">Time</label>:</td>
                <td><input class="btn-default" size="30" name="time" type="time" autocomplete="off"></td>
            <tr>
                <td colspan="2"> 
                    <input type="submit" name="submit" value="Take an appointement">
                
                </td>

            </tr>
        </table>
    </form>
         <br>
        
    </section>
    </div>
    </div>
    </section>
    


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



     
     <footer class="footer">
        <p class="footer-title"><span>         BARBER.TN</span></p>
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
