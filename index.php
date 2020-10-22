<?php

/**
 * Importiruem vse nuzhniye Classy
 */
include_once "Shop.php";
include_once "LuxuryShop.php";

include_once "Basket.php";


/**
 * Zdes' vse cennosti, obishno oni prixodit iz baza dannyx (DB)
 */
$products = ["T-Shirt", "Jeans", "Coat", "Shoes", "Shirt"];
$luxuryProducts = ["Jacket", "Tie", "Watch"];
$sizes = ["xs", "s", "m", "l", "xl"];
$count = rand(7, 14);


/**
 * Zdes' budet xranitcya vse produkty
 */
$allProducts = [];



echo "<h3>Normal products list</h3>";

$objects = [];

for ($i=0; $i<$count; $i++){
    $product = getRandValue($products);
    $allProducts[] = $product;

    /**
     * Sozdaetcya object Shop
     */
    $objects[] = new Shop($product, rand(9, 25), getRandValue($sizes));
    $objects[$i]->getDress();

}



echo "<h3>Luxury products list</h3>";

/**
 * Zdes' foreach izpolzovalcya dlya togo chto by dat töl'ko te danniye,
 * kotoriye nachoditcya v $luxuryProducts (Array!!!)
 */
foreach ($luxuryProducts as $luxuryProduct){
    $allProducts[] = $luxuryProduct;

    /**
     * Sozdaetcya object LuxuryShop
     */
    $luxury = new LuxuryShop($luxuryProduct, rand(65, 120), getRandValue($sizes), "100% cotton");

    /**
     * Eto function vizyvaetcya iz child Class
     */
    $luxury->getDress();
}


/**
 * @param $array
 * @return random(value)
 * Eto function daet randomiy cennost'
 */
function getRandValue($array){
    return $array[rand(0, count($array)-1)];
}



/**
 * Eto dlya rascherneniya projecta
 * Basket dlya pokupki produkta
 */
echo "<h3>Orders in Basket</h3>";

$basket1 = new Basket(rand(1, count($allProducts)));
Basket::addOrder(3);
$basket1->getOrderList($allProducts);
//Basket::deleteOrder();


/**
 * Vopros!!!
 *
 * 1) Kak mozhno object ($objects!) convertirovat na array value???
 *        - naprimer $objects na array value (chto by $allProducts ne izpozovat)
 *        - $basket1->getOrderList($allProducts) -> $basket1->getOrderList($objects); kak mozhno ispolzovat tak
 *
 *          $basket1->getOrderList($objects); ERROR ->
 *              !!! Uncaught Error: Object of class Shop could not be converted to string in Basket.php on line 47
 *
 *
 */