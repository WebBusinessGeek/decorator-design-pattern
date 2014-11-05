<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
	realpath(__DIR__.'/..')
);

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app->singleton(
	'Illuminate\Contracts\Http\Kernel',
	'App\Http\Kernel'
);

$app->singleton(
	'Illuminate\Contracts\Console\Kernel',
	'App\Console\Kernel'
);


/*
|--------------------------------------------------------------------------
| Personal Bindings
|--------------------------------------------------------------------------
|
| Personal bindings for the application
|
|
|
*/



$app->bind('App\CoffeeShopAppDecoratorPattern\DescriptionSheetContract',
	'App\CoffeeShopAppDecoratorPattern\DescriptionSheet'
);

$app->bind('App\CoffeeShopAppDecoratorPattern\PriceSheetContract',
	'App\CoffeeShopAppDecoratorPattern\PriceSheet'
);

$app->bind('App\CoffeeShopAppDecoratorPattern\SizeSheetContract',
	'App\CoffeeShopAppDecoratorPattern\SizeSheet'
);
/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/




return $app;
