<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:15 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


class AddOn implements BeverageInterface{

    use BeverageAbleTrait;

    public $beverage;

    public function __construct()
    {
        //call setDescriptionSheet and setPriceSheet
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