<?php
include("_header.php");

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
//he go to find what user text in data table client then in data table admins 
$client = $DB->db->query("SELECT * FROM client WHERE mail = '$email' and passwords='$ps'");
$user = $client->fetch(PDO::FETCH_OBJ);

$admin = $DB->db->query("SELECT * FROM admins WHERE mail = '$email' and passwords='$ps'");
$admins = $admin->fetch(PDO::FETCH_OBJ);



// we open a new session and give her an email if it's not an admin 
if (!isset($_SESSION)) {
    session_start();
     }

if ($client->rowCount() > 0)// email and password exist in Data Table client  
{
    $_SESSION['mail']=$email; 
/*     var_dump($_SESSION['mail']);die;
 */ 
    header('Location:homepage.php');

}
elseif($admin->rowCount() > 0)// email and password exist in Data Table admins  
 {
     header('Location:admin.php');
    } 
else{
        echo "please create your account";
    }
