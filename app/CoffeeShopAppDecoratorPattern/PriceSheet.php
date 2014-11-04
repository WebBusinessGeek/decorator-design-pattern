<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:20 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


class PriceSheet implements PriceSheetContract {

    public $coffee = [

        'small' => .85,

        'medium' => 1.15,

        'large' => 1.50,

    ];

    public $decafCoffee = [];

    public function findPrice($type, $size)
    {
        $array = $this->$type;

        return $array[$size];
    }




}