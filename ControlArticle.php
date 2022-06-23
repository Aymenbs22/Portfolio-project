<?php
include 'Article.class.php';

$ref = "";
$descriptions = "";
$price = "";
$quantity = "";
$image="";
$myimage="";

if (isset($_POST["reference"])) {
	$ref = $_POST["reference"];
/*     echo $ref;*/
}

if (isset($_POST["description"])) {
	$descriptions = $_POST["description"];
   // echo $descriptions;
}

if (isset($_POST["price"])) {
	$price = $_POST["price"];
}

if (isset($_POST["quantity"]))
	$quantity = $_POST["quantity"];


if (isset($_POST["my_image"])){
	$my_image = $_POST["my_image"];
	}

/* if (isset($_POST["image"]))
	$image = $_POST["image"]; */

	if (isset($_FILES['my_image'])) {
		$img_name = $_FILES['my_image']['name'];
		$img_size = $_FILES['my_image']['size'];
		$tmp_name = $_FILES['my_image']['tmp_name'];
		$error = $_FILES['my_image']['error'];
		//error to verify if we select file or no 
	    
		if ($error === 0) {
			if ($img_size > 1025000){
				//verify the size of picture if it is big more than availble stockage 
				$em = "Sorry, your file is too large.";
				// print_r($em);
			}else {			
				$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
				$img_ex_lc = strtolower($img_ex);
				//an extension to verify a type of picture 
				$allowed_exs = array("jpg", "jpeg", "png");
				if (in_array($img_ex_lc, $allowed_exs)) {
					//verify if file  selected is image-extention ? 
					$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
					//create new name for the file to ignore duplication names problems					 
 					$img_upload_path = 'uploads/'.$new_img_name;
				
					move_uploaded_file($tmp_name,$img_upload_path);
					// Insert into Database
					/* $sql = "INSERT INTO images(image_url) 
							VALUES('$new_img_name')";
					mysqli_query($conn, $sql);
					header("Location: view.php"); */
					$image = $img_upload_path;
				}else {
					$em = "You can't upload files of this type";
				}
			}
		}else {
			$em = "unknown error occurred!";
		}
	}

// insert article in data table
if ($ref != null && $descriptions != null && $price != null && $quantity != null && $image != null) {
    //var_dump($ref);die;
	$Ar = new Article($ref,$descriptions, $price, $quantity,$image);
	if (isset($_POST["submit"])) {
		Article::AddArticle($Ar);
		//esm el classe :: esm el methode (el parametre te3 el methode)
		echo '<script> alert("product added to cart"); </script>';
		header('Location: admin.php');
	}
}

//delete an article from data table article 
if (isset($_POST['delete']) and isset($_POST['ref'])) {
	Article::DeleteArticle($ref);
	echo '<script> alert("deleted succes"); </script>';
	header('Location:admin.php');
}

// Edit Article In product table
if (isset($_POST['update'])) {
	//$resultat = $conn->query("select * from article WHERE ref = '$ref'");
	Article::updateArticle($Ar);
	echo '<script> alert("succes update"); </script>';
	echo "Référence: $ref <br> descriptions: $descriptions <br> price: $price <br> Qte en stock: $quantity <br>";
}

//afficher les article
if (isset($_POST['afficher'])) {
	$listArt = Article::AfficherArticle();
	echo "<h3> La liste de tous les articles</h3>";

	echo "<table class='stylTab'>";
	echo "<tr><th>Référence </th> <th>Libellé</th><th>price</th><th>Qte en stock</th> <th> image </th> ";
	foreach ($listArt as $Art) {
		echo $Art;
	}
	echo "</table>";
} ?>
<br>
<form action=" admin.php">
    <input type="submit" name="ajout" value="Retourner">
</form>
