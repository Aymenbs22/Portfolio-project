<!DOCTYPE html>
<html lang="en">

<?php 
require '_header.php';
//Get The Data From The Class DB                                          
$req = $DB->db->prepare("select * from produits");
$req->execute();
$produits = $req->fetchAll();
/* print_r($produits);die;
 */
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <!-- <link rel="stylesheet" href="fonts.css"> -->
    <link rel="stylesheet" href="styles/logincss.css">
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
            <a href="cart.php">Cart</a>
            <a href="resprods.php">Reserved Products</a>
            <a href="deconnexion.php">Logout</a>


            <label for="show" class="show-btn">Login</label>
        </nav>
    </header>
    
    <section class="main">
        <section class="move">
        <div>
            <h2>HEARS & BEARD<br><span>BARBER</span></h2>
            <h3>Welcome to the BARBER Shop</h3><br>
            <h1>Take an appointment to the barber </h1><br>
            <a href="rdv.php" class="main-btn">Take an appointment</a>
        </div>
       </section>
    </section>

    <section class="cards" id="services">
        <br><br>
        <h2 class="title">Products</h2>
        <div class="content">



        <?php foreach ($produits as $produit): ?>
            <div class="card">
                <div class="icon">
                </div>
                <div class="info">
                <section class="productimg">
                <img src=<?php echo $produit['images']?> alt="Denim Jeans" style="width:100%">
                <!-- image by product from data base  -->
                    </section>
                    <br><br><br><br>
                    <h3><?php echo $produit['descriptions'] ?></h3>
                    <p class="price"><?php echo $produit['price'] ?>dt</p> 
                    <button>
                    <a class="add" href="addCart.php?ref=<?= $produit['reference']; ?>"> Add to Cart
                    </a>
                    </button>
                </div>
            </div>
            
<?php  endforeach ?> 

    </section>
<br>
<br>
<br>
<br>
<br>

    <section class="main">
        <section class="move">
        <div>
        </div>
       </section>
    </section>


    <div class="center">
        <input type="checkbox" id="show">

        <div class="container">
           <label for="show" class="close-btn fas fa-times" title="close"></label>
           <div class="text">
              Login Form
           </div>



           <form action="controleLogin.php" method="POST">
              <!-- Give Tha data of the login to (controleLogin.php) with post method 
              BECAUSE THIS IS PRIVATE DATA for security -->

              <div class="data">
                    <!-- input of the email and password we give him a name to call it later -->
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
