<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:08 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


interface BeverageInterface {

    public function getDescription();

    public function setDescription($type);

    public function getSize();

    public function setSize($size);

    public function getPrice();

    public function setPrice($type, $size);

    public function cost();
}