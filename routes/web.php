<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// U S E R
Route::get('/', 'frontController@Home')->name('Home');
Route::get('/Checkout', 'frontController@Checkout')->name('Checkout');
Route::get('/Sub_Item/{id}', 'frontController@Sub_Item')->name('Sub_Item');

// U S E R L O G I C
Route::post('/postOrder', 'userController@postOrder')->name('postOrder');

// A D M I N

Route::group(['middleware' => ['auth']], function () {
	

	// L A Y O U T
	Route::get('/AdminHome', 'frontController@getAdminHome')->name('getAdminHome');
	Route::get('/AdminAllItem', 'frontController@getAdminAllItem')->name('getAdminAllItem');
	Route::get('/AdminSubItem', 'frontController@getAdminSubItem')->name('getAdminSubItem');

	Route::get('/AdminCreateItem', 'frontController@getCreateItem')->name('getCreateItem');
	Route::get('/AdminEditItem/{id}'		,'frontController@AdminEditItem')->name('AdminEditItem');

	Route::get('/AdminOrder', 'frontController@getAdminOrder')->name('getAdminOrder');
	Route::get('/AdminOrderDetail/{id}', 'frontController@getAdminOrderDetail')->name('getAdminOrderDetail');

	Route::get('/AdminHistory', 'frontController@getAdminHistory')->name('getAdminHistory');

	Route::get('/AdminCreateOrderInshop', 'frontController@getAdminCreateOrderInshop')->name('getAdminCreateOrderInshop');
	Route::post('/CreateOrderItem'	,'itemController@CreateOrderItem')		->name('CreateOrderItem');
	Route::get('/AdminHistoryCreateOrderInshop', 'frontController@getAdminHistoryCreateOrderInshop')->name('getAdminHistoryCreateOrderInshop');


	Route::get('/AdminHistoryInshopDetail/{id}', 'frontController@getAdminHistoryInshopDetail')->name('getAdminHistoryInshopDetail');

	Route::get('/registerAdmin', 'frontController@registerAdmin')->name('registerAdmin');
	Route::get('/listAdmin', 'frontController@listAdmin')->name('listAdmin');

	Route::get('/AdminCreateOrderItem', 'frontController@getCreateOrderItem')->name('getCreateOrderItem');

		// s t a t i s t i c a l

		Route::get('/statisticalOrder', 'frontController@getstatisticalOrder')->name('getstatisticalOrder');
		Route::get('/statisticalItem', 'frontController@getstatisticalItem')->name('getstatisticalItem');	


	// L O G I C

		// I T E M
		Route::post('/CreateItem'	,'itemController@CreateItem')		->name('CreateItem');
		Route::post('/EditItem'		,'itemController@EditItem')				->name('EditItem');
		Route::get('/DeleteItem/{id}'	,'itemController@DeleteItem')		->name('DeleteItem');
		Route::get('/getdata', 'itemController@getData')->name('getData');

		Route::get('acceptorder/{id}', 'itemController@acceptorder')->name('acceptorder');
		Route::get('deleteorder/{id}', 'itemController@deleteorder')->name('deleteorder');

		// U S E R
		Route::post('/CreateUser'	,'AdminController@CreateUser')		->name('CreateUser');
		Route::get('/DeleteUser/{id}'	,'AdminController@DeleteUser')		->name('DeleteUser');


	
});


// C A R T
Route::get('add-to-cart/{id}',[
    "as"=>'them-gio-hang',
    "uses"=>'itemController@getAddToCart'
]);
Route::get('del-cart/{id}',[
    "as"=>'xoa-gio-hang',
    "uses"=>'itemController@getDelItemCart'
]);


// A U T H E N T I C A T E
Auth::routes();

Route::get('/home', 'frontController@getAdminHome')->name('getAdminHome');
// Route::get('/home', 'HomeController@index')->name('home');
