<?php

  require '_header.php'; 

  $quantity="";

  $quantity = $_GET['valu'];  
/*      var_dump($quantity);die; 
 */   


  //  var_dump($_SESSION['cart']);die;
 /* 
 $s= $_SESSION['cart'][$produit['reference']];

 var_dump($s);die; */
//array_keys give us the the keys of products that was selected on  cart (session)  (referances)
$ids = array_keys($_SESSION['cart']);


// $name="";
// if (isset($_POST["nom"])) {
//     $name = $_POST["nom"];
// }
/* var_dump($name);die; */

// if (isset($get["confirmer"])) {

//   if (isset($_POST["nom"])) {
//     $name = $_POST["nom"];
// /*     var_dump($name);die;
//  */}

// }
 //* $nom=$_POST["nom"];
 
/* print($name);die;
die;
 */
if(empty($ids)){
    $products = [];
  }else{
      // $DB = new DB;                                      
      // TO Get List of All data of products that selected 
      // to fitch it later for insertion in database
      $req = $DB->db->prepare('select * from produits where reference in ('.implode(',', $ids).')');
      //var_dump($req);die;
      $req->execute();
      $products = $req->fetchAll();
  }

  //  print_r($products);die;
 
$time = date('Y-m-d H:i:s');
//insert all data of product in the table when client confirm  
  foreach ($products as $pdt) {


      /* echo $pdt['reference'].'<br>';
      echo $pdt['descriptions'].'<br>';
      echo $pdt['quantity'].'<br>';
      echo $pdt['price'].'<br>'; */
      $quantity = $_GET['valu'];  
      $statement = $DB->db->prepare("INSERT INTO prodd (mail,reference,descriptions,quantity,price,taketime) VALUES(?,?,?,?,?,?);"); //or //die(print_r($stmt->errorInfo()));
      $statement->bindParam('1', $_SESSION['mail']);
      $statement->bindParam('2', $pdt['reference']);
      $statement->bindParam('3', $pdt['descriptions']);
      $statement->bindParam('4', $quantity/* $pdt['quantity'] */);
      $statement->bindParam('5', $pdt['price']);
      $statement->bindParam('6', $time);
      $statement->execute() ;
      
      header('Location: homepage.php');
      $_SESSION['cart']=null;
/*          header('Location: homepage.php');
 */       //* die; */
  }
