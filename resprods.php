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
    <title>Reserved Products</title>
    <style>  table, th, td {
      border: 1px solid white;
      border-collapse: collapse;
  }
  th, td {
      background-color: #96D4D4;
  }</style>
</head>
<body>
    <header>
        <a href="homepage.php" class="logo">Barber</a>
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




     <?php require '_header.php';?>
     <table style="width:100%, text-align: center;">
        <tr>
            <th>reference </th>
            <th>descriptions</th>
            <th>quantity</th>
            <th>price</th>
            <th>taketime</th>
        </tr>
     <?php
  $mails = $_SESSION['mail'];
  $req = $DB->db->prepare("SELECT * FROM prodd WHERE mail = '$mails'");
  $req->execute();
  $ResProducts = $req->fetchAll();
  foreach($ResProducts as $produit):?>
    <tr>
          <td><?php echo $produit['reference'] ?></td>
          <td><?php echo $produit['descriptions'] ?></td>
          <td><?php echo $produit['quantity'] ?></td>
          <td><?php echo $produit['price'] ?></td>
          <td><?php echo $produit['taketime'] ?></td>
          <td>

          </td>
      </tr>
      <?php endforeach ?>



</body>
</html>
