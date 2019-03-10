<?php
use App\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product/{id}', 'ProductController@show');
Route::get('/product', 'ProductController@index');
Route::get('/category', 'CategoryController@index');
Route::post('/order', 'OrderController@store');
Route::get('/getOrder', 'OrderController@index');
Route::get('/baking','BakingController@index');
Route::get('/extra','ExtraController@index');
Route::get('/extraList','ExtraListController@index');
Route::get('/prestation','PrestationController@index');
Route::get('/size','SizeController@index');
