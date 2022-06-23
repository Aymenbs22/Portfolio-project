<?php
include("_header.php");

/*  if (!isset($_SESSION['client'])) {
     $_SESSION['client'] = array();
 } */

$fname=$lname=$age=$password=$mail=$phonenumber="";


if (isset($_POST["mail"])) {
  $email = $_POST["mail"];
}
if (isset($_POST["password"])) {
  $ps = $_POST['password'];
} 






?>
