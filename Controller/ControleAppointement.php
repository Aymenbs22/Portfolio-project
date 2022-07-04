<?php 
include '../Class/appointement.class.php';

if (!isset($_SESSION)) {
    session_start();
}
$name = "";
$date = "";
$time = "";
$mail= "";
$Number="";

if (isset($_POST["NumberPhone"])) {
    $Number = $_POST["NumberPhone"];
}
if (isset($_SESSION['mail'])) {
    $mail = $_SESSION['mail'];
}
if (isset($_POST["nom"])) {
    $name = $_POST["nom"];
}
if (isset($_POST["BarberStyles"])){
    $types = $_POST["BarberStyles"];
}
if (isset($_POST["rdate"])) {
    $date=$_POST['rdate'];
}
if (isset($_POST["time"]))
     $time=$_POST['time'];

if ($name&& $date&&$time&&$types&&$mail&&$Number!= null) 
 {
    $App = new Appointement($name,$date,$time,$mail,$types,$Number);

  if (isset($_POST["submit"])) {
    Appointement::AddRdv($App);
        header('Location: ../pages/acceuil.php');
    echo '<script> alert("Appointment Added Successfully"); </script>';
    }
}
?>
