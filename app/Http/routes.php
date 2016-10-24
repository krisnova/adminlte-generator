<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/home');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::auth();

Route::get('/home', 'HomeController@index');


//Route::get('/warehouses', 'WarehouseController@index');

Route::resource('warehouses', 'WarehouseController');

Route::resource('datatables', 'DatatablesController');
Route::get('datatables',['uses'=>'DatatablesController@getIndex', 'as' => 'datatables']);
Route::get('datatables.data',['uses'=>'DatatablesController@anyData', 'as' => 'datatables.data']);
//Route::get('datatables', 'DatatablesController@anyData');



/*

Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'edit'  => 'datatables.edit',

    'getIndex' => 'datatables',

]);

*/