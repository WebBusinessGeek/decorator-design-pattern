<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/3/14
 * Time: 8:21 PM
 */

namespace App\Beverages;


use App\BeverageSuperClass;

class DecafCoffee extends BeverageSuperClass {

    public function __construct()
    {
        return $this;
    }
    public function getDescription()
    {
        return 'Decaf coffee';
    }

    public function cost()
    {
        return 'this cost';
    }

}