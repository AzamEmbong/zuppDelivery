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
// customer    
Route::group(['middleware' => 'revalidate'], function()
{
    Route::get('/', 'PagesController@index');
});

Route::get('/profile','CusProfileController@profile');

Auth::routes();
Route::group(['middleware' => 'revalidate'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/profile','CusProfileController@profile');

Route::get('/deliveryDetails','CusProfileController@deliveryDetails');
Route::post('/addDetails','RequestController@storeDetails');
Route::get('/test','CusProfileController@test');
Route::post('/addProfile','CusProfileController@addProfile');
Route::get('/report','report@submission');
Route::get('/printDetails','CusProfileController@printDetails');
Route::get('/viewPrint','CusProfileController@viewPrint');

Route::get('/quoteDetails','RequestController@viewQuote');
// Route::prefix('admin')->group(function(){
//     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//     Route::get('/', 'AdminController@index')->name('admin.dashboard');
    
// });
Route::get('/request','RequestController@store');
Route::get('/indexQuote', 'RequestController@storeIndex');
Route::get('/summary', 'PagesController@summary');
Route::get('/submit', 'PagesController@submit');
Route::post('/makeReport', 'PagesController@makeReport');
// rider
Route::group(['middleware' => 'revalidate'], function()
{
    Route::get('/home1', 'HomeController@index1')->name('home1');
});

Route::get('/approval', 'RiderController@approval')->name('approval');
Route::get('/updateStatus/{delivery_id}', 'RiderController@updateStatus');
Route::get('/updateStatus1/{delivery_id}', 'RiderController@updateStatus1');
Route::get('/updateStatus2/{delivery_id}', 'RiderController@updateStatus2');
Route::get('/confirmation/{delivery_id}', 'RiderController@confirmation');
Route::prefix('rider')->group(function() {
    Route::get('/login','Auth\RiderLoginController@showLoginForm')->name('rider.login');
    Route::post('/login', 'Auth\RiderLoginController@login')->name('rider.login.submit');
    Route::post('/logout', 'Auth\RiderLoginController@logoutRider')->name('rider.logout');
    Route::group(['middleware' => 'revalidate'], function()
    {
        Route::get('/', 'RiderController@index')->name('rider.dashboard');
    });
       
    
   });

// admin
Route::group(['middleware' => 'revalidate'], function()
{
    Route::get('/home2', 'HomeController@index2')->name('home2');
});
Route::get('/readReport/{report_id}', 'PagesController@read')->name('readReport');
Route::prefix('admin')->group(function() {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logoutAdmin')->name('admin.logout');
    Route::group(['middleware' => 'revalidate'], function()
{
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
   
   }) ;
