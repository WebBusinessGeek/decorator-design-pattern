<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:15 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


use \Illuminate\Foundation\Application;

class AddOn implements BeverageInterface{

    use BeverageAbleTrait;

    public $beverage;

    public function __construct($type, BeverageInterface $beverage)
    {
        $this->beverage = $beverage;

        $a = Application::getInstance();

        $this->descriptionSheet = $a->make('App\CoffeeShopAppDecoratorPattern\DescriptionSheetContract');

        $this->priceSheet = $a->make('App\CoffeeShopAppDecoratorPattern\PriceSheetContract');

        $this->setDescription($type);

        $this->setSize($this->beverage->getSize());

        $this->setPrice($type, $this->beverage->getSize());


    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($type)
    {
        $this->description = $this->descriptionSheet->findDescription($type);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($type, $size)
    {
        $this->price = $this->priceSheet->findPrice($type, $size);
    }

    public function cost()
    {
        return $this->convertToMoney($this->price);
    }

    public function convertToMoney($price)
    {
        return number_format($price, 2, '.', '');
    }

}