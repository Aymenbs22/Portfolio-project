<?php
  require '../_header.php'; 

  $quantity="";
  $ids = array_keys($_SESSION['cart']);

if(empty($ids)){
    $products = [];
  }else{
      $req = $DB->db->prepare('select * from products where reference in ('.implode(',', $ids).')');
      $req->execute();
      $products = $req->fetchAll();
  }

$time = date('Y-m-d H:i:s');
//insert all data of product in the table when client confirm  
  foreach ($products as $product) {    
      $statement = $DB->db->prepare("INSERT INTO reservedproduts (mail,reference,descriptions,quantity,price,taketime) VALUES(?,?,?,?,?,?);"); //or //die(print_r($stmt->errorInfo()));
      $statement->bindParam('1', $_SESSION['mail']);
      $statement->bindParam('2', $product['reference']);
      $statement->bindParam('3', $product['descriptions']);
      $statement->bindParam('4',$_SESSION['cart'][$product['reference']]   /* $quantity */  /* $product['quantity'] */);
      $statement->bindParam('5', $product['price']);
      $statement->bindParam('6', $time);
      $statement->execute() ;
}
// update lil table product.
  $_SESSION['cart']=null;
  header('Location: ../pages/acceuil.php');
