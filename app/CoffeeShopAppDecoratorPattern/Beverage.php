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

        $this->setDescription($type);

        $this->setSize($size);

        $this->setPrice($type, $size);


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
        $this->size = $this->sizeSheet->findSize($size);
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