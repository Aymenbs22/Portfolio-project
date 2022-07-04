<?php

class client 
{
    private $name;
    private $firstName;
    private $age;
    private $mail;
    private $password;
    private $number;

    public function __construct($name, $firstName, $age, $mail, $password, $number)
    {
        $this->name = $name;
        $this->firstName = $firstName;
        $this->age = $age;
        $this->mail = $mail;
        $this->password = $password;
        $this->number=$number;
    }
    
    //private $data=array();
    public function __get($attr)
    {
        if (!isset($this->$attr)) {
            return "erreur";
        } else {
            return ($this->$attr);
        }
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    public function __toString()
    {
        $s ="<tr> <td>$this->name</td> <td>$this->firstName </td><td> $this->age </td><td> $this->mail </td><td> $this->password </td></tr> <td> $this->number </td><td>";
        return $s;
    }




    public static function AddClient($client)
    {
        //include("BD.php");
        include("db.class.php");
         $DB=new DB();
        $statement = $DB->db->prepare("INSERT INTO client(names,firstName,age,mail,passwords,PhoneNumber) VALUES(?,?,?,?,?,?);"); //or //die(print_r($stmt->errorInfo()));

        $statement->bindParam('1', $client->name);
        $statement->bindParam('2', $client->firstName);
        $statement->bindParam('3', $client->age);
        $statement->bindParam('4', $client->mail);
        $statement->bindParam('5', $client->password);
        $statement->bindParam('6', $client->number);
        $statement->execute() ;
        //or die(print_r($statement->errorInfo()));
    }
}
?>
