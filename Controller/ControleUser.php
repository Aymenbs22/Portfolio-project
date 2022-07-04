<?php 

//require 'BD.php';
include '../Class/client.class.php';
//include 'connexion.php';

$name = $firstName = "";
$age = "";
$mail = "";
$password = "";
$Number = "";


if (isset($_POST["name"])) {
    $name = $_POST["name"];
/*     var_dump($name);die;
 */}
if (isset($_POST["first-name"])) {
    $firstName=$_POST['first-name'];
}

if (isset($_POST["age"]))
     $age=$_POST['age'];

if (isset($_POST["mail"]))
      $Mail=$_POST['mail'];

if (isset($_POST["psw"]))
       $Password=$_POST['psw'];


if (isset($_POST["number"])) {
    $Number=$_POST['number'];
}

if ($name&& $firstName&& $age&& $Mail && $Password && $Number!= null) 
 {
    $client = new client($name, $firstName, $age, $Mail, $Password,$Number);
    //var_dump($client);
    if (isset($_POST["submit"])) {
        //echo "bravo client ajouté";
        client::AddClient($client);
        echo '<script> alert("Your account was created successfully"); </script>';
        header('Location: ../pages/acceuil.php');

        
        //	echo "Référence: $ref <br> Libelle: $libelle <br> Prix: $prix <br> Qte en stock: $qtestk <br> image: $image <br>";
    }
}
?>
