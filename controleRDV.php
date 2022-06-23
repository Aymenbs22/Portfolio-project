<?php 

include 'rdv.class.php';
//include 'connexion.php';
/*  require '_header.php'; 
 */ 
$name = "";
//$date = "";
$time = "";
$rdate="";
/* $mail=""; */

/* if (isset($_SESSION['mail'])) {
    $mail = $_SESSION['mail'];
} */
   /*  var_dump($mail);
    die; */


$mail=$_SESSION['mail'];
/* var_dump($mail);die;
 */
if (isset($_POST["nom"])){
    $name = $_POST["nom"];
/*   var_dump($name);die;
 */
}
/* if (isset($_POST["date"])) {
    $date=$_POST['date'];
    var_dump($date);die;
} */

if (isset($_POST["rdate"])) {
    $date=$_POST['rdate'];
   // var_dump($date);die;
}
if (isset($_POST["time"]))
     $time=$_POST['time'];
   //  var_dump($time);die;

if ($name&& $date&& $time/* &&$mail */!= null) 
 {
    $rdv = new rdv($name,$date,$time/* ,$mail */);
/*     var_dump($rdv);die;
 */    if (isset($_POST["submit"])) {
        //echo "bravo client ajouté";
        rdv::AddRdv($rdv);
        //	echo "Référence: $ref <br> Libelle: $libelle <br> Prix: $prix <br> Qte en stock: $qtestk <br> image: $image <br>";
        header('Location: homepage.php');
        echo '<script> alert("Ajout avec succés"); </script>';
    }
}

?>
