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

Route::get('/', 'FrontendController@index')->name('site'); 
Route::get('/menu','FrontendController@menu')->name('menu');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::post('/reservation','ReservationController@reserve')->name('reserve');
Route::post('/contactmessage','CantactController@sendmessage')->name('contact-send');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'/admin','middleware'=>['auth','admin']],function(){
    Route::any('/',function(){
        return view ('home');
    })->name('admin');

    Route::group(['prefix'=>'/category'], function(){

        Route::get('/','CategoryController@index')->name('category-list');
        Route::get('/{id}','CategoryController@getCategoryForm')->name('category-edit');
        Route::get('/post','CategoryController@getCategoryForm')->name('category-post');
        Route::post('/post','CategoryController@submitCategory')->name('category-submit');
        Route::get('/delete/{category_id}','CategoryController@deleteCategory')->name('category-delete');

    });

    Route::group(['prefix'=>'/item'],function(){
     
        Route::get('/','ItemController@index')->name('item-list');
        Route::get('/create','ItemController@create')->name('item-create');
        Route::post('/store','ItemController@store')->name('item-store');
        Route::get('/show/{id}','ItemController@show')->name('item-show');
        Route::get('/edit/{id}','ItemController@edit')->name('item-edit');
        Route::post('/update/{id}','ItemController@update')->name('item-update');
        Route::get('/delete/{id}','ItemController@destroy')->name('item-delete');
    });

    Route::group(['prefix'=>'/testimony'],function(){
     Route::get('/','TestimonyController@index')->name('testimony-list');

    
        Route::get('/{id}','TestimonyController@getTestimonyForm')->name('testimony-edit');
      
        Route::get('/post','TestimonyController@getTestimonyForm')->name('testimony-post');
        Route::post('/post','TestimonyController@submitTestimony')->name('testimony-submit');
      
        Route::get('/delete/{testimony_id}','TestimonyController@deleteTestimony')->name('testimony-delete');

        Route::get('/show/{id}','TestimonyController@show')->name('testimony-show');
     
    });

    Route::group(['prefix'=>'/blog'],function(){
      
        Route::get('/','BlogController@index')->name('blog-list');
        Route::get('/{id}','BlogController@getBlogForm')->name('blog-edit');
      
        Route::get('/post','BlogController@getBlogForm')->name('blog-post');
        Route::post('/post','BlogController@submitBlog')->name('blog-submit');
      
        Route::get('/delete/{blog_id}','BlogController@deleteBlog')->name('blog-delete');

    });

    Route::get('/reservation','AdminReservationController@index')->name('admin-reserve');
    Route::post('/reservation/{id}','AdminReservationController@status')->name('reserve-status');
    Route::delete('/reservation/{id}','AdminReservationController@destroy')->name('reserve-destroy');

    Route::get('/contact','AdminContactController@index')->name('contact-index');
    Route::get('/contact/{id}','AdminContactController@show')->name('contact-show');
    Route::get('/contact/{id}','AdminContactController@delete')->name('contact-delete');

});

Route::get('/about',function(){
return view('frontend.pages.about');
})->name('about');

Route::get('/service',function(){
    return view('frontend.pages.service');
})->name('service');
