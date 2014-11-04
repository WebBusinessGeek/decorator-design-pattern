<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/3/14
 * Time: 8:57 PM
 */

namespace App;


interface BeverageAddonDecorator extends BeverageSuperClass {

    public function getDescription();

    public function cost();



}