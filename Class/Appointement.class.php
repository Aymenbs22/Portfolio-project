<?php
// Define Appointement Class With att and functions
class Appointement 
{
    private $name;
    private $date;
    private $time;
    private $mail; 
    private $type;
    public $number;

    //private $quantite
    public function __construct($name, $date, $time ,$mail,$type,$number)
    {
        $this->name = $name;
        $this->date = $date;
        $this->time = $time;   
        $this->mail = $mail; 
        $this->type = $type;
        $this->number = $number;

    }
    // Add Appointement Function To insert the data of the appointement into the data base
    public static function AddRdv($rdv)
    {
         /* we make include _header to called db.class.php 
         to define a DB object ( $DB=new DB()) */
       include("../_header.php");
        $statement = $DB->db->prepare("INSERT INTO 
        appointment (nom,dates,exactTime,mail,types,PhoneNumber) VALUES(?,?,?,?,?,?);");
        $statement->bindParam('1', $rdv->name);
        $statement->bindParam('2', $rdv->date);
        $statement->bindParam('3', $rdv->time);
        $statement->bindParam('4', $rdv->mail); 
        $statement->bindParam('5', $rdv->type);
        $statement->bindParam('6', $rdv->number); 
         
        $statement->execute() ;
    }
}

?>
