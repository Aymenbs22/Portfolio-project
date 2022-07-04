<?php
session_start(); //start session or resume
session_unset(); // clear el data eli fel session
session_destroy(); //ysaker el session
header('Location:acceuil.php');
exit;

?>
