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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function() {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('admin/slider', 'SliderController')->middleware('auth');
        Route::resource('admin/items', 'ShopItemcontroller')->middleware('auth');
        Route::resource('admin/company', 'CompanyController')->middleware('auth');
        Route::resource('admin/product', 'ProductController')->middleware('auth');
        Route::resource('admin/color', 'ColorController')->middleware('auth');
        Route::resource('admin/addproduct', 'AddProducts')->middleware('auth');
        Route::resource('admin/country', 'CountryController')->middleware('auth');
        Route::resource('admin/city', 'CityController')->middleware('auth');
        Route::resource('admin/account', 'AccountController')->middleware('auth');
        Route::resource('admin/shipments', 'ShipController')->middleware('auth');
        Route::resource('admin/photos', 'PhotosController')->middleware('auth');
        Route::resource('admin/photo2', 'Photo2Controller')->middleware('auth');
        Route::resource('admin/socials','SocialController')->middleware('auth');
        Route::resource('admin/branches','BranchController')->middleware('auth');
        Route::resource('admin/abouts','AboutController')->middleware('auth');
        Route::resource('admin/messages','MessageController')->middleware('auth');

        Route::get('products/{id}', 'AddProducts@show')->middleware('auth');
        Route::get('prodinfo/{id}', 'AddProducts@find')->middleware('auth');

        Route::get('/',function ()
        {
            return view('welcome');
        });
        Route::get('/brand',function ()
        {
            return view('brand');
        });
        Route::get('/about',function ()
        {
            return view('about');
        });
        Route::get('/contact',function ()
        {
            return view('contact');
        });

        Route::get('/log',function ()
        {
            return view('log');
        });

        Route::get('/prodinfo',function ()
        {
            return view('prodinfo');
        });










    });
