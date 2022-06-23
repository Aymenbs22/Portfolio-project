<?php
require '_header.php';
$val = $_GET['ref'];
//  var_dump($val);die;for testing  
// To Test If We Get The Refrance Or Not 


//If We Get It
if(isset($_GET['ref'])) {
     // we search on it in data base (we make sure that we will find)
     //We Can use val or ref
      $req = $DB->db->prepare('SELECT reference FROM produits WHERE reference=:ref', array('ref'=> $_GET['ref']));
      $req->execute(array('ref'=> $_GET['ref']));
      $products = $req->fetchAll(); //it give us the reference
     /*  var_dump($products);die; */
    

   if(empty($products)){
       die("This product is not available");
   }


   //if we find it we will add on session (call a method from cart.class)
   //we can call ($Cart) because we cal it in page _header.php($cart= new cart())
   //if we don't call it in _header's page we will get an error 
   $cart->add($products[0]['reference']);
    header('Location: homepage.php');
    die(" Product added to cart ");
}else{
    die("No product selected");
}
