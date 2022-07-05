<?php
   // require '_header.php';
// Define cart Class With att and functions  
class cart
{
    private $DB;
       public function __construct($DB)
       {
         if (!isset($_SESSION)) {
         session_start();
          }
        if (!isset($_SESSION['cart']))
         {
            $_SESSION['cart'] = array();
        }
       $this->DB=$DB;
        }
     //this function calculate the number of products on session 
        public function count(){
           return array_sum($_SESSION['cart']);
        } 

        //this function add product on cart 
        public function add($ref){
        if(isset($_SESSION['cart'][$ref])){ //if the product exist, the quantity increase
            $_SESSION['cart'][$ref]++;
            }else{//if the product not exist it take quantity=1
                $_SESSION['cart'][$ref]=1;
            }
        } 
       /* this function delete product from cart(it's just called fucntion uunset that delete reference of product selected
       from session) */
        public function del($ref)
        {
           unset($_SESSION['cart'][$ref]);
        } 

      public function total()
        { 
              $DB = new DB;  
              $total = 0;
              $ids=array_keys($_SESSION['cart']);// all references selected  
             if(empty($ids)){
                 $products=[];
             }else{
                 $req=$this->DB->db->prepare('SELECT reference,price FROM products WHERE reference IN ('.implode(',',$ids).')');
                 $req->execute( $ids/* array('ref'=> $_GET['reference']) */);
                 $products = $req->fetchAll(); 
/*                 print_r($products);die; 
 */             }
             foreach($products as $produit){
                 
                 $total += $produit['price'] * $_SESSION['cart'][$produit['reference']];
                 //var_dump($total);die;
             }
         return $total;
          // unset($_SESSION['cart'][$ref]);
        }  
}
