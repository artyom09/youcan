<?php

use Illuminate\Support\Facades\Route;

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


//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();
});


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', 'IndexController@index')->name('home');

    // Auth::routes();
    // Route::get('/auth/{provider}', 'Auth\RegisterController@redirectToProvider');
    // Route::get('/auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

    Route::get('/about', 'AboutController@index')->name('about');

    Route::get('/gallery', 'AboutController@gallery')->name('gallery');

    Route::post('/follow', 'AboutController@follow')->name('follow');

    Route::get('/staff', 'AboutController@teachers')->name('staff');

    Route::get('/service', 'ServiceController@index')->name('service');

    Route::get('/blog', 'BlogController@index')->name('blog');

    Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');

    Route::get('/pricelist', 'ProductController@pricelist')->name('pricelist');

    Route::get('/contact', 'ContactController@index')->name('contact');

    Route::post('/contact_post', 'ContactController@message')->name('contact_post');

    // Route::get('/category/{category}/', 'ProductController@categories')->name('categories');

    // Route::get('/category/{id}', 'ProductController@productcat');

    // Route::get('/search', 'ProductController@search');

    // Route::get('/product/{id}', 'ProductController@product');

    // Route::get('/products/{id}', 'ProductController@product_category')->name('products_category');

    // Route::get('/product/category/{id}', 'ProductController@product_category_id')->name('product.category.id');


});
