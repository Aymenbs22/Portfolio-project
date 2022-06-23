<!DOCTYPE HTML>
<html>

<head>
    <!-- <style>
    .messagErreur {
        color: red;
    }
    table {
        border-collapse: collapse;
    }
    .stylTab {
        border: 1px solid black;
    }
    </style> -->



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/fonts.css">
    <link rel="stylesheet" href="styles/logincss.css">
    <link rel="icon" href="images/logo.png">
    <script defer src="totops.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Barber Admin</title>
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
    </header>


    <?php
   /*  include 'Article.class.php';
    include 'connexion.php'; */
    require '_header.php';

     $req =$DB->db->query("select * from rdv ");
     $req->execute();
     $rendezVous = $req->fetchAll();
     //var_dump($rendezVous);die;
    ?>


    <h3 align=center>
        <FONT size="10" align=center> <I><B>Saisir un article</B></I></FONT>
    </h3><br><br>
    <!-- <form name="form1" action="ControlArticle.php" method="POST"> -->
    <form action="ControlArticle.php"
           method="post"
           enctype="multipart/form-data">
        <table>
              <tr>
             <td><label for="reference">Référence</label>:</td>
                <td> <input name="reference" type="text" required />
                </td>
            </tr> 
            <tr>
                <td><label for="description">description</label>:</td>
                <td> <input name="description" type="text" />
                </td>
            </tr>
            
            <tr>
                <td><label for=" price">price</label>:</td>
                <td> <input name="price" type="text"
                        value="<?php if (isset($resultat['price'])) echo $resultat['price']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="quantity">Qte en Stock</label>:</td>
                <td> <input name="quantity" type="text"
                        value="<?php if (isset($resultat['quantity'])) echo $resultat['quantity']; ?>" /></td>
            </tr>
      <!--       <tr>
            
              <td><label for="image">image </label>:</td>
                <td> <input name="image" type="text"
                        value="<?php if (isset($resultat['image'])) echo $resultat['image']; ?>" /></td>
            </tr> -->
            <tr>
            <input type="file" 
                  name="my_image">
            </tr>

            <tr>
                <td colspan="2"> 
                    <input type="submit" name="submit" value="Ajouter article">
                    <input type="submit" name="update" value="Modifier article">
                    <!--   onclick="updateArticle(document.form1.ref.value)" -->
                    <input type="submit" name="delete" value="Supprimer article"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                    <!-- onclick=" suppArticle(document.form1.ref.value)" /> -->
                    <input type="submit" name="afficher" value="Afficher article" />
                 <a href="deconnexion.php" class="deconnexion"> Deconnecter </a>
                </td>

            </tr>
        </table>
        </form>


<?php foreach ($rendezVous as $rdv): ?>
    <div>
<table>
  <tr>
    <th>nom</th>
    <th>date</th>
    <th>time</th>
  </tr>
  <tr>
    <td><?php echo $rdv['nom']?></td>
    <td><?php echo $rdv['dates']?></td>
    <td><?php echo $rdv['exactTime']?></td>
  </tr>
 
</table>
</div>
<?php  endforeach ?>   
</body>




<footer class="footer">
        <p class="footer-title"><span>TBIBI.TN</span></p>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        </div>
    </footer>
</html>
