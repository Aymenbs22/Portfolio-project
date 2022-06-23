<?php require '_header.php';?>
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
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/logincss.css">
    <link rel="icon" href="images/logo.png">
    <script defer src="totops.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cart</title>
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
/* var_dump($ids);die;
 */
if(empty($ids)){
  $products = [];
}else{ // BECH TJIB LISTE mtaa les id lkool bech tafichiihom 
  $req = $DB->db->prepare('select * from produits where reference in ('.implode(',',$ids).')');
  $req->execute();
  $products = $req->fetchAll();
  //print_r($products);die;
}
foreach($products as $produit):?>
      <!-- <form action="addAdmin.php" method="post"> -->
      <tr>
            <td><?php echo $produit['descriptions'] ?></td>
            <td><?php echo $produit['price'] ?></td>
            <td> <input type="text" width="30" name="quantite" value="<?= $_SESSION['cart'][$produit['reference']] ?>"</td>
            <td><img src=<?php echo $produit['images'] ?> alt="Denim Jeans" style="width:20%"></td>
            
             
                   <!-- 3melna appel lil methode count elli f west cart.class.php bch te7sbelna
        9adeh min produit 5tarna  -->
            <td>
               <a href="cart.php?del=<?= $produit['reference'];?>" class="del"><img width=20% src="uploads/delete.PNG"></a>
               <!--  he4a bch yo93od fi nafs el page w heka 3leeh ktebna el foo9 fi GET(del)
                 bch yeb3a4 el reference f variable esmo del w y4abto el foo9 ken wselo 
                 yaaml el appel lil methode del (cart.php) -->

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
        <td><?=$cart->total();?></td>


          <!--bch tecmhi lil page addAdmin..php w bch tebaa4lo el quantity 
           (te3 kol products)elli f west el session   
           
            ki tekteb hakka  salah.php?valu=5 
      = maantha bch temchi lil page salah.php w bch tebaa4lo valu f westo 5 -->
    </form>
    </table>
    <div class="cartbuttons">  
        <button>
       <a name='confirmer' href="addAdmin.php?valu=<?= $_SESSION['cart'][$produit['reference']]?>">Confirm</a>
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



           <form action="controleLogin.php" method="POST">
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
