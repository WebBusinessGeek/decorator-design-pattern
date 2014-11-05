<?php
/**
 * Created by PhpStorm.
 * User: MacBookEr
 * Date: 11/4/14
 * Time: 8:23 PM
 */
//
//App::bind(‘SizeSheetContract’, ‘SizeSheet’);
//App::bind(‘PriceSheetContract’, ‘SizeSheet’);
//App::bind(‘DescriptionSheetContract’, ‘SizeSheet’);

$a = new Illuminate\Container\Container;

$a->bind('DescriptionSheetContract', 'DescriptionSheet');
