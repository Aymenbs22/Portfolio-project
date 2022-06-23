<?php
require  'db.class.php';
require 'cart.class.php';
//require  'addAdmin.php';
$DB = new DB;
$cart = new cart($DB);
?>
