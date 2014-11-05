<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 5:20 PM
 */

namespace App\CoffeeShopAppDecoratorPattern;


class SizeSheet implements SizeSheetContract {

    public $sizes = [

        'small' => 'small',

        'medium' => 'medium',

        'large' => 'large'

    ];
    public function findSize($size)
    {
      return ($this->checkValue($size)) ? $this->sizes[$size] : 'not at all man';

    }

    public function checkValue($size)
    {
        return in_array($size, $this->sizes);
    }


}