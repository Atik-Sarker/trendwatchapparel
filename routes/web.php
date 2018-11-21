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



Route::get('/', 'BaseController@index');
Route::get('/contact-us', 'BaseController@contact')->name('contact');
Route::get('/associates', 'BaseController@associates')->name('associates');
Route::get('/service', 'BaseController@service')->name('service');
Route::get('/about-us', 'BaseController@about')->name('about');
Route::get('/category', 'BaseController@category')->name('category');
// home page route

Route::get('/slider-create', 'SliderController@create')->name('slider.create');
Route::post('/slider-create', 'SliderController@store')->name('slider.store');
Route::get('/slider-manage', 'SliderController@index')->name('slider.manage');
Route::get('/slider-edit/{id}', 'SliderController@edit')->name('slider.edit');
Route::post('/slider-update/{id}', 'SliderController@update')->name('slider.update');
Route::get('/slider-delete/{id}', 'SliderController@destroy')->name('slider.destroy');
Route::post('/slider-status/{id}', 'SliderController@status')->name('slider.status');
// Slider  end
Route::get('/category-add', 'CategoryController@create')->name('categoryAdd');
Route::post('/category-create', 'CategoryController@store')->name('category.store');
Route::get('/category-manage', 'CategoryController@index')->name('category.manage');
Route::get('/category-edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/category-update/{id}', 'CategoryController@update')->name('category.update');
Route::get('/categor-delete/{id}', 'CategoryController@destroy')->name('category.destroy');
Route::post('/category-status/{id}', 'CategoryController@status')->name('category.status');
// category  end

Route::get('/post-manage', 'PostController@index')->name('post.manage');
Route::get('/post-create', 'PostController@create')->name('post.create');
Route::post('/post-create', 'PostController@store')->name('post.store');
Route::get('/post-edit/{id}', 'PostController@edit')->name('post.edit');
Route::post('/post-update/{id}', 'PostController@update')->name('post.update');
Route::get('/post-delete/{id}', 'PostController@destroy')->name('post.destroy');

Route::post('/post-status/{id}', 'PostController@status')->name('post.status');
// Post  end

Route::get('/category/{slug1}', 'BaseController@ProductCategory');
// category product end

Route::post('/contact-us', 'Contact@contactus')->name('contact.us');
// Contact us end
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
