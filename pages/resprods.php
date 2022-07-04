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
    <script defer src="../totops.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Reserved Products</title>
    <style>  table, th, td {
    border: 1px solid white;
    border-collapse: collapse;
    margin-left: 550px;
    height: 51px;
    text-align: center;
  }
  th, td {
      background-color: #d5d4d4;
  }</style>
</head>
<body>
    <header>
    <a href="acceuil.php" class="logo">BARBER</a>
        <nav class="navigation">
            <a href="../pages/product.php">Products</a>
            <a href="../pages/appointement.php">Take an appointment</a>
            <a href="../pages/contact.html">Contact Us</a>
            <a href="../pages/cart.php">Cart</a>
            <a href="../pages/resprods.php">Reserved Products</a>
            <a href="../pages/deconnexion.php">Logout</a>
            <label for="show" class="show-btn">Login</label>
        </nav>
    </header>
    
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
           
        </div>
     </div> 

     <?php require '../_header.php';?>
     <section class="main6">
     <table style="width:100%, text-align:, center;">
        <tr>
            <th>Reference </th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Taketime</th>
        </tr>
     <?php
  $mails = $_SESSION['mail'];
  $req = $DB->db->prepare("SELECT * FROM reservedproduts WHERE mail = '$mails'");
  $req->execute();
  $ResProducts = $req->fetchAll();
  foreach($ResProducts as $product):?>
    <tr>
          <td><?php echo $product['reference'] ?></td>
          <td><?php echo $product['descriptions'] ?></td>
          <td><?php echo $product['quantity'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['taketime'] ?></td>
          <td>

          </td>
      </tr>
      <?php endforeach ?>
      </section>
</body>
</html>
