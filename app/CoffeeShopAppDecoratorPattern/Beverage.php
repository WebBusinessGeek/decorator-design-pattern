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

    public function __construct($type, $size, DescriptionSheetContract $d, PriceSheetContract $p, SizeSheetContract $s)
    {
        $this->setDescriptionSheet($d);

        $this->setPriceSheet($p);

        $this->setSizeSheet($s);

        $this->description = $this->descriptionSheet->findDescription($type);

        $this->price = $this->priceSheet->findPrice($type, $size);

        $this->size = $this->sizeSheet->findSize($size);

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