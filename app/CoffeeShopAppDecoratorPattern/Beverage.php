<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:10 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


class Beverage implements BeverageInterface{

    use BeverageAbleTrait, SizeAbleTrait;

    public function __construct($type, $size)
    {

        //call setDescriptionSheet , setPriceSheet, and setSizeSheet
    }
    public function getDescription()
    {

    }

    public function setDescription()
    {

    }

    public function getSize()
    {

    }

    public function setSize()
    {

    }

    public function getPrice()
    {

    }

    public function setPrice()
    {

    }

    public function cost()
    {

    }


}