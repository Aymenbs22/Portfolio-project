<?php
require '../_header.php';
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
        $statement = $DB->db->prepare("INSERT INTO products(reference,descriptions,quantity,price,images) VALUES(?, ?, ?, ?,?);"); //or //die(print_r($stmt->errorInfo()));
        $statement->bindParam('1',$article->ref);
        $statement->bindParam('2', $article->descriptions);
        $statement->bindParam('3', $article->quantity);
        $statement->bindParam('4',$article->price);
        $statement->bindParam('5', $article->image);
        $statement->execute() ;//or die(print_r($statement->errorInfo()));
    }

    public static function DeleteArticle($ref)
    {
        $DB=new DB();
        $sql = "DELETE FROM products WHERE reference = '$ref'";
        $statement = $DB->db->prepare($sql);
        $statement->execute();
    }
