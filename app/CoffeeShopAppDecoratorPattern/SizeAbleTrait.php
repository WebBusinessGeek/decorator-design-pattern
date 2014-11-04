<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:38 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


trait SizeAbleTrait {

    public $sizeSheet;

    public function setSizeSheet(SizeSheetContract $sizeSheetContract)
    {
        $this->sizeSheet = $sizeSheetContract;
    }
}