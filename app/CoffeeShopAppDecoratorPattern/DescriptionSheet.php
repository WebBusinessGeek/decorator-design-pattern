<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:19 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


use Psr\Log\InvalidArgumentException;

class DescriptionSheet implements DescriptionSheetContract {

    public $beverages = [

        'coffee' => 'coffee',

        'decafCoffee' => 'decafCoffee',

        'espresso' => 'espresso',

        'hotTea' => 'hotTea',
    ];

    public $addons = [

        'sugar' => 'sugar',

        'cream' => 'cream',

        'soyMilk' => 'soyMilk',

        'mocha' => 'mocha'

    ];
    public function findDescription($type)
    {
        return ($this->checkValue($type)) ? $this->giveType($type) : 'no no no guy';

    }

    public function checkValue($type)
    {
       return in_array($type, $this->beverages) || in_array($type, $this->addons);
    }

    public function whichArray($type)
    {
        $array = (in_array($type, $this->beverages)) ? 'beverages' : 'addons';

        return $array;
    }

    public function giveType($type)
    {
        $list = $this->whichArray($type);

        $array = $this->$list;

        return $array[$type];
    }

}