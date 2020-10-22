<?php

/**
 * Eto parent Class
 */
class Shop
{
    /**
     *  Protected dlya togo chtoby dochernoi class ego bez getter function vizyvat
     * No uchityvaiu zdez est' opasnost!!!
     * Naprimer nach dochernoi class mozhet izmenit sennosti nashego suchnosti
     */
    protected $product;
    protected $price;
    protected $size;

    /**
     * Eto static suchnost sozdana dlya togo chtoby byt UNIQUE KEY
     * Poshemu zdes' private? Ego nikto ne dolzhen izmeniyat!!!
     */
    private static $id = 0;

    /**
     * Posle obevlenie objecta srazu prisvaevaetcya nuzhniye suchnosti
     * @param $product
     * @param $price
     * @param $size
     */
    public function __construct($product, $price, $size)
    {
        $this->product = $product;
        $this->price = $price;
        $this->size = $size;

        /**
         * Kazhdyi raz uvelichivaetcya id na edinicu
         * Eto dlya togo chto by on ostalcya kak UNIQUE KEY
         */
        self::$id++;
    }


    /**
     * Tak kak suchnost id private i ego ne videt nash doshernoi class
     * poetomu my pishem public ili protected function dlya poluchenie cennost  ot suchnosti id
     */
    protected static function getId()
    {
        return self::$id;
    }



    /**
     * Zdes' vydaetcya resultat
     */
    public function getDress()
    {
        echo "ID: <b>".Shop::$id."</b> - ";
        echo "Product: <b>".$this->product."</b>, ";
        echo "price: <b>".$this->price."€</b>, ";
        echo "size: <b>".$this->size."</b> <br>";
    }

}