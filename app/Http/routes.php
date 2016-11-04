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
//Route::get('datatables',['uses'=>'DatatablesController@getIndex', 'as' => 'datatables']);
Route::get('datatables.data',['uses'=>'DatatablesController@anyData', 'as' => 'datatables.data']);
//Route::get('datatables', 'DatatablesController@anyData');



/*

Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'edit'  => 'datatables.edit',

    'getIndex' => 'datatables',

]);

*/

//Route::resource('product', 'ProductController');
//Route::resource('manufacturer', 'ManufacturerController');
Route::resource('note', 'NoteController');
Route::resource('office', 'OfficeController');
Route::resource('observer', 'ObserverController');
Route::resource('stock', 'StockController');
Route::resource('user', 'UserController');
Route::resource('alert', 'AlertController');
Route::resource('channel', 'ChannelController');
Route::resource('admin/feedbacks', 'Admin\\FeedbacksController');
//Route::resource('warehouse/manufacturers', 'Warehouse\\ManufacturersController');
Route::resource('warehouse/manufacturers', 'Warehouse\\ManufacturersController');
Route::resource('warehouse/products', 'Warehouse\\ProductsController');
Route::resource('warehouse/stocks', 'Warehouse\\StocksController');
Route::resource('warehouse/offices', 'Warehouse\\OfficesController');
Route::resource('warehouse/observers', 'Warehouse\\ObserversController');
Route::resource('warehouse/notes', 'Warehouse\\NotesController');
Route::resource('warehouse/channels', 'Warehouse\\ChannelsController');
Route::resource('warehouse/alerts', 'Warehouse\\AlertsController');