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

    public function setDescription();

    public function getSize();

    public function setSize();

    public function getPrice();

    public function setPrice();

    public function cost();
}