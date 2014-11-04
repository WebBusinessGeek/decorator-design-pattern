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

    public $decafCoffee = [

        'small' => .87,

        'medium' => 1.17,

        'large' => 1.52,

    ];

    public $hotTea = [

        'small' => .80,

        'medium' => 1.10,

        'large' => 1.40,

    ];

    public $espresso = [

        'small' => .90,

        'medium' => 1.20,

        'large' => 1.70,

    ];

    public $sugar = [

        'small' => .20,

        'medium' => .40,

        'large' => .50,

    ];

    public $cream = [

        'small' => .25,

        'medium' => .45,

        'large' => .52,

    ];

    public $soyMilk = [

        'small' => .35,

        'medium' => .55,

        'large' => .62,

    ];

    public $mocha = [

        'small' => .36,

        'medium' => .56,

        'large' => .61,

    ];




    public function findPrice($type, $size)
    {
        $array = $this->$type;

        return $array[$size];
    }




}