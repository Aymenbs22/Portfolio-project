<?php
class rdv 
{
    private $name;
    private $date;
    private $time;
    /* private $mail; */
    //private $quantite
    public function __construct($name, $date, $time/* ,$mail */)
    {
        $this->name = $name;
        $this->date = $date;
        $this->time = $time;   
        /* $this->mail = $mail;  */
    }
    
    // $rendez-vous = new rdv();
    // rendez-vous -> AddRdv();

    
  

    /*   les methodes magique hooma des methode (predefini) mawjodin f kol classe 
    elli hooma (__GET, __SET,__CONSTRUCT,__TOOSTRING ) 
    taaml 9odemhom zoz mattat 5atr magique */
    // public function __get($attr)
    // {
    //              //bch traja3lk el object 
    //     if (!isset($this->$attr)) {
    //         return "erreur";
    //     } else {
    //         return ($this->$attr);
    //     }
    // }

    // public function __set($attr, $value)
    // {
    //     $this->$attr = $value;
    // }

    // public function __toString()
    // {
    //     $s ="<tr> <td>$this->name</td> <td>$this->date </td><td> $this->time </td><td> $this->mail </td><td> $this->password </td></tr> <td> $this->number </td><td>";
    //     return $s;
    // }
    //les methode eli t5os el class rdv tektebhom el lahna

    public static function AddRdv($rdv)
    {
        /*3melna include (header)---> bch taamlelna el appel  db.class.php 
         bch taamlelna el definition te3 ( $DB=new DB() ) elli c deja f west */ 
       include("_header.php");

        $statement = $DB->db->prepare("INSERT INTO rdv (nom,dates,exactTime/* ,mail */) VALUES(?,?,?);"); //or //die(print_r($stmt->errorInfo()));
    //kol wa7da min lazhna bch t9ol (?) mnin jet 
        $statement->bindParam('1', $rdv->name);
        $statement->bindParam('2', $rdv->date);
        $statement->bindParam('3', $rdv->time);
        /* $statement->bindParam('4', $rdv->mail); */
        $statement->execute() ;//or die(print_r($statement->errorInfo()));
    }
}

?>
