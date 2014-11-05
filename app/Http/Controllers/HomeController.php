<?php namespace App\Http\Controllers;


use App\Beverages\DecafCoffee;
use App\CoffeeShopAppDecoratorPattern\Beverage;
use App\CoffeeShopAppDecoratorPattern\DescriptionSheet;
use App\CoffeeShopAppDecoratorPattern\PriceSheet;
use App\CoffeeShopAppDecoratorPattern\SizeSheet;
use App\Providers\kevinProvider;
use Illuminate\Container\Container;
use Illuminate\Foundation\Application;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	$router->get('/', 'HomeController@showWelcome');
	|
	*/


	public function index()
	{
//		$b = new Container();
//		$b->getBindings();
//		$b->bind('DescriptionSheetContract', 'DescriptionSheet');
		$a = new Beverage('coffee', 'large', new DescriptionSheet(), new PriceSheet(), new SizeSheet());

		//$a->setDescriptionSheet(new DescriptionSheet());
		dd($a);

		//dd($b->getBindings());





	}

}

