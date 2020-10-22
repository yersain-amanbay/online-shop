<?php

include_once "Shop.php";


/**
 * Eto dochernoi Class
 * Zdes' ispolzuetcya inheritance ot Classa Shop
 */

class LuxuryShop extends Shop
{
    private $quality;

    /**
     * LuxuryShop constructor.
     * @param $product
     * @param $price
     * @param $size
     * @param $quality
     */
    public function __construct($product, $price, $size, $quality){
        parent::__construct($product, $price, $size);
        $this->quality = $quality;
    }


    /**
     * @return quality
     * Zdes' ispolzuetcya Encapsulation
     */
    public function getQuality(){
        return $this->quality;
    }


    /**
     * @return float|int
     * Zdes' ispolzuetcya Polymorphism
     * Luxury product price otlichalsya ot normal product price
     */
    public function getPrice(){
        return $this->price * 2;
    }

    /**
     * Zdes' ewe raz ispolzuetcya Polymorphism
     * Zdes' vydaetcya resultat dlya Luxury Product
     */
    public function getDress(){
        echo "ID: <b>".Shop::getId()."</b> - ";
        echo "Luxury Product: <b>".$this->product."</b>, ";
        echo "price: <b>".$this->getPrice()."€</b>, ";
        echo "size: <b>".$this->size."</b>";
        echo " quality:<b> ".$this->getQuality()."</b><br>";
    }


}