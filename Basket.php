<?php


class Basket
{
    private $id;
    private static $count;

    /**
     * Basket constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Eto function dlya dobavlenie produkta v korziny
     * U nee est @param int $val poumalshenie on raven edinicu
     */
    public static function addOrder($val = 1){
        if($val == 1){
            self::$count++;
        }else{
            self::$count += $val;
        }
    }

    /**
     * Eto function dlya udalenie produkta iz korziny
     */
    public static function deleteOrder(){
        if (self::$count > 0) {
            self::$count--;
        }
    }


    /**
     * Zdes' vydaetcya resultat chto v korzine lezhit
     * U etogo function est obezatelniye @param $allProducts
     * Eto sdelano potomu chto na baza danniyx poka ewe nichego ne soxranaetcya
     * Esli project rashereaem togda v budeshem eti dannye prixodit iz baza dannyx (DB)
     */
    public function getOrderList($allProducts){
        echo "ID: ".$this->id." it is ".$allProducts[$this->id-1].", ".Basket::$count." times to buy <br>";
    }




}