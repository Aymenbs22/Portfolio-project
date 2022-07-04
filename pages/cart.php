<?php require '../_header.php';?>
<?php 
if(isset($_GET['del'])){
  $cart->del($_GET['del']);
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/fonts.css">
    <link rel="stylesheet" href="../styles/logincss.css">
    <link rel="icon" href="../images/logo.png">
    <script defer src="totops.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cart</title>
</head>
<body>
    <header>
    <a href="acceuil.php" class="logo">BARBER</a>
        <nav class="navigation">
            <a href="../pages/product.php">Products</a>
            <a href="../pages/rdv.php">Take an appointment</a>
            <a href="../pages/contact.html">Contact Us</a>
            <a href="../pages/cart.php">Cart</a>
            <a href="../pages/resprods.php">Reserved Products</a>
            <a href="../pages/deconnexion.php">Logout</a>
        </nav>
    </header>

    <head>
    <style>
    table,
    th,
    td {
        border: 1px solid white;
        border-collapse: collapse;
    }
    th,
    td {
      background-color: #d5d4d4;
      text-align: center;
    }
    </style>
</head>

<body>
<br>
<br>
<br>
<br>
<form action="addAdmin.php" method="get">
    <table style="width:100%">
        <tr>
            <th>Name </th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
<?php
$ids = array_keys($_SESSION['cart']); //el ids bch ta3araf les references el kol elli f west el session cart 
//ids array is a table that save all reference selected on session
if(empty($ids)){
  $products = [];
}else{
   // we gives  all products that we will display 
  $req = $DB->db->prepare('select * from products where reference in ('.implode(',',$ids).')');
  $req->execute();
  $products = $req->fetchAll();
}
foreach($products as $product):?>
      <!-- <form action="addAdmin.php" method="post"> -->
      <tr>
            <td><?php echo $product['descriptions'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td> <input type="text" width="30" name="quantite" value="<?= $_SESSION['cart'][$product['reference']] ?>"</td>
            <td><img src=<?php echo $product['images'] ?> alt="Denim Jeans" style="width:20%"></td>
            
            <td>
               <a href="cart.php?del=<?= $product['reference'];?>" class="del"><img width=30% src="../uploads/delete.png"></a>
            </td>
        </tr>
        <?php endforeach ?>
        <form action="addAdmin.php" method="get">
    <table style="width: 100%;">
        <tr>
            <th>Total Products In Cart</th>
            <th>Total Price</th>
        </tr>

        <td><?=$cart->count();?></td> 
        <!-- we call the function count from cart.class.php that calculate how much product in the cart(session ) -->
        <td><?=$cart->total();?> TND</td>
   
    </form>
    </table>
    <div class="cartbuttons">  
        <button>
       <a name='confirmer' href="../Controller/ControleConfirmCart.php">Confirm</a>
       </button>
       </div>
   
</body>
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
     <br>
     <br><br><br><br><br><br><br><br><br>
     <br><br><br><br><br><br><br><br><br>
     <br>
    <div class="center">
        <input type="checkbox" id="show">

        <div class="container">
           <label for="show" class="close-btn fas fa-times" title="close"></label>
           <div class="text">
              Login Form
           </div>
           <form action="../Controller/controleLogin.php" method="POST">
            
                <!-- we send the data of login to controleLogin.php (with Post) because it is a private data    -->



                <!--  bch yebaa4 les donnee mte3 el login lil (controleLogin.php) bi POST 
              (why Post)!! BECAUSE THIS IS PRIVATE DATA for security  -->

              <div class="data">
                  <!--el input te3 el mail and password 3tinehom name bch n3aytolhom baad 
 -->  
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
