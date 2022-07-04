<?php
include("../_header.php");

  /*  if (!isset($_SESSION['client'])) {
       $_SESSION['client'] = array();
   } */

$email = $ps ="";

if (isset($_POST["mail"])) {
    $email = $_POST["mail"];
}
if (isset($_POST["password"])) {
    $ps = $_POST['password'];
} 
//he go to find the input of the user in data table client then in data table admins 
//if the email and password found the rowcount will be > 0
$client = $DB->db->query("SELECT * FROM client WHERE mail = '$email' and passwords='$ps'");

$admin = $DB->db->query("SELECT * FROM admins WHERE mail = '$email' and passwords='$ps'");



// we open a new session and give her an email if it's not an admin 
if (!isset($_SESSION)) {
    session_start();
     }

if ($client->rowCount() > 0)// email and password exist in Data Table client  
{
    $_SESSION['mail']=$email; 
/*     var_dump($_SESSION['mail']);die;
 */ 
    header('Location:../pages/acceuil.php');

}
elseif($admin->rowCount() > 0)// email and password exist in Data Table admins  
 {
     header('Location:../pages/admin.php');
    } 
else{
     header("Location:../pages/signup.php");
    }





