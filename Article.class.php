<?php
require '_header.php';
class Article
{
    private $ref;
    private $descriptions;
    private $price;
    private $quantity;
    private $image;

    function __construct($reference, $descriptions, $price, $quantity,$image)
    {
        $this->ref = $reference;
        $this->	descriptions = $descriptions;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->image=$image;
    }
                            
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
        $s = "<tr> <td> $this->ref</td><td> $this->descriptions </td><td> $this->price </td><td> $this->quantity </td><td> $this->image </td></tr>";
        return $s;
    }

    
    public static function AddArticle($article)
    { 
       $DB= new DB();
   $statement = $DB->db->prepare("INSERT INTO produits(reference,descriptions,quantity,price,images) VALUES(?, ?, ?, ?,?);"); //or //die(print_r($stmt->errorInfo()));
        $statement->bindParam('1',$article->ref);
        $statement->bindParam('2', $article->descriptions);
        $statement->bindParam('3', $article->quantity);
        $statement->bindParam('4',$article->price);
        $statement->bindParam('5', $article->image);
        $statement->execute() ;//or die(print_r($statement->errorInfo()));
    }

    public static function updateArticle($article)
    {
        include("connexion.php");
        $sql = "UPDATE article SET 	descriptions =:descriptions, 
        price = :price, 
        qte = :qte,
        images = :images
        WHERE ref = :ref";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':	descriptions', $_GET['	descriptions'], PDO::PARAM_STR);
        $stmt->bindParam(':price', $_GET['price'], PDO::PARAM_INT);
        $stmt->bindParam(':qte', $_GET['qtestk'], PDO::PARAM_STR);
        $stmt->bindParam(':ref', $_GET['ref'], PDO::PARAM_INT);
        $stmt->bindParam(':images', $_GET['image'], PDO::PARAM_INT);

        $stmt->execute();
    }

    public static function DeleteArticle($ref)
    {
        $DB=new DB();
        $sql = "DELETE FROM products WHERE reference = '$ref'";
        $statement = $DB->db->prepare($sql);
        $statement->execute();
    }

    public static function AfficherArticle()
    {
        $DB=new DB();
        $listArticles = [];
        $products = $DB->db->query("select * from products");
        foreach ($products as $product) {
            $listArticles[] = new Article(
                $product['ref'],
                $product['descriptions'],
                $product['price'],
                $product['qte'],
                $product['images']
            );
        }
        return $listArticles;
    }
    public static function SearchArticle($ref)
    {
        $DB = new DB();
        $sql = "SELECT * FROM article WHERE ref = '$ref'";
        $statement =$DB->db->prepare($sql);
        $resultat = $statement->execute();
        return $resultat;
    }  
} 
