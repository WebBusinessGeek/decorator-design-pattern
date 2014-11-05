<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:10 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


use App\CoffeeShopAppDecoratorPattern\DescriptionSheetContract as Description;
use Illuminate\Foundation\Application;

class Beverage implements BeverageInterface{

    use BeverageAbleTrait, SizeAbleTrait;



    public function __construct($type, $size)
    {
        $a = Application::getInstance();

        $this->descriptionSheet = $a->make('App\CoffeeShopAppDecoratorPattern\DescriptionSheetContract');

        $this->priceSheet = $a->make('App\CoffeeShopAppDecoratorPattern\PriceSheetContract');

        $this->sizeSheet = $a->make('App\CoffeeShopAppDecoratorPattern\SizeSheetContract');

        $this->description = $this->descriptionSheet->findDescription($type);

        $this->size = $this->sizeSheet->findSize($size);

        $this->price = $this->priceSheet->findPrice($type, $size);

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