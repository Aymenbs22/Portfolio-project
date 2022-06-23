<?php 

//require 'BD.php';
include 'client.class.php';
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

/* $name=$_POST['name'];
$firstName=$_POST['first-name'];
$age=$_POST['age'];
$Mail=$_POST['mail'];
$Password=$_POST['salah'];
$Number=$_POST['number'];  */
//if ($name != null && $firstName != null && $age != null && $Mail != null && $Password != null && $Number != null)

if ($name&& $firstName&& $age&& $Mail && $Password && $Number!= null) 
 {
    $client = new client($name, $firstName, $age, $Mail, $Password,$Number);
    //var_dump($client);
    if (isset($_POST["submit"])) {
        //echo "bravo client ajouté";
        client::AddClient($client);
        echo '<script> alert("Your account was created successfully"); </script>';
        header('Location: homepage.php');

        
        //	echo "Référence: $ref <br> Libelle: $libelle <br> Prix: $prix <br> Qte en stock: $qtestk <br> image: $image <br>";
    }
}









/* 













include(BD.php);
$requette="SELECT * FROM user WHERE login = '$login' and password='$mp" ;
$sql = $conn->query($requette);
$user = $sql->fetch(PDO::FETCH_OBJ);

if ($sql->rowCount() > 0)
      {
          echo $login;
          header('Location:register.html');
      }

if($login=="oussema"&& $mp=="oussema"){
    
    header('Location:register.html');
   //var_dump($login);
    }
elseif($login!=="oussema"&& $mp!=="oussema")
    //$requette="SELECT * FROM user WHERE login = '$login' and password='$mp" ;
    header('Location:adminlogin.js');
else
    alert("erreur");


 */

?>
