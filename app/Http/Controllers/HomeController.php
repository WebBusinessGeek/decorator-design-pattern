<?php namespace App\Http\Controllers;


use App\Beverages\DecafCoffee;
use App\CoffeeShopAppDecoratorPattern\Beverage;
use App\CoffeeShopAppDecoratorPattern\DescriptionSheet;
use App\CoffeeShopAppDecoratorPattern\PriceSheet;
use App\CoffeeShopAppDecoratorPattern\SizeSheet;
use App\Providers\kevinProvider;
use Illuminate\Container\Container;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;
use Symfony\Component\Yaml\Tests\B;

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
//		bind('App\CoffeeShopAppDecoratorPattern\DescriptionSheetContract',
//			'App\CoffeeShopAppDecoratorPattern\DescriptionSheet'
//		);$a = new Application();
//		$a->
//		//$c = new Beverage($a->make('App\CoffeeShopAppDecoratorPattern\DescriptionSheetContract'));

		$c = new Beverage('hotTea', 'large');
		dd($c->cost());





	}

}

