<?php
require '_header.php';

class productTaken
{
    private $name;
    private $reference;
    private $description;
    private $quantity;
    private $price;
    // private $images;



    function __construct($name, $reference, $description, $quantity,$price/* ,$images */)
    {
        $this->name = $name;
        $this->	reference = $reference;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->price=$price;
/*         $this->images=$images;
 */    }
                            
    //private $data=array();
    public function __get($attr)
    {
        if (!isset($this->$attr))
            return "erreur";
        else
            return ($this->$attr);
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    public function __toString()
    {
        $s = "<tr> <td> $this->name</td><td> $this->reference </td><td> $this->description </td><td> $this->quantity </td><td> $this->price </td></tr>";
        return $s;
    }

    public static function AddArticleTaken($productTaken)
    {
/*         include("connexion.php");
 */     
   //  $conn->exec("INSERT INTO article (ref,	descriptions,price,qte,id_fournisseur) VALUES ('$article->ref', '$article->	descriptions','$article->price','$article->quantity', '$article->idfournisseur')");
       $DB= new DB();
   $statement = $DB->db->prepare("INSERT INTO prodd(name,reference,descriptions,quantity,price) VALUES(?, ?, ?, ?,?);"); //or //die(print_r($stmt->errorInfo()));

      $statement->bindParam('1', $productTaken->name);
        $statement->bindParam('2', $productTaken->reference);
        $statement->bindParam('3', $productTaken->description);
        $statement->bindParam('4',$productTaken->quantity);
        $statement->bindParam('5', $productTaken->price);
        $statement->execute() ;//or die(print_r($statement->errorInfo()));
    }
} 
