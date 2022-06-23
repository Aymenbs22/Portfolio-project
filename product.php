<?php //require 'header.php'; ?>
<?php

/* session_destroy(); */

include("db.class.php");

$req = $conn->query("select * from produits");
$req->execute();
$products = $req->fetchAll(); 
?>


<body>

<h2 style="text-align:center">Product Card</h2>



<?php foreach ($products as $product): ?>

    <div class="show">
        <img src=<?php echo $product['images'] ?> alt="Denim Jeans" style="width:100%">
        <h1></h1>
        <p class="price"><?php echo $product['prix'] ?>dt</p>
        <p><?php echo $product['libelle'] ?></p>
        <a class="add" href="addCart.php?ref=<?= $product['ref']; ?>">
            add
        </a>
    </div>
    <?php  endforeach ?>
    <a href="deconnexion.php" class="deconnexion"> Deconnecter </a>
</body>
</html>
