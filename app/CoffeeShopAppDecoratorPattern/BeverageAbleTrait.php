<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:21 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;




use Illuminate\Foundation\Application;

trait BeverageAbleTrait {

    public $descriptionSheet;

    public $priceSheet;

    public $price;

    public $size;

    public $description;



    public function setDescriptionSheet(DescriptionSheetContract $descriptionSheetContract)
    {
        $this->descriptionSheet = $descriptionSheetContract;

    }

    public function setPriceSheet(PriceSheetContract $priceSheetContract)
    {
        $this->priceSheet = $priceSheetContract;
    }

}