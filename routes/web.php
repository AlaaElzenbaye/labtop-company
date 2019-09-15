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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/*************************************how to use middleware*********************************/
route::group(['middleware'=>'news'],function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/aboutme', 'HomeController@aboutme')->name('aboutme');

});



/********add product for admin only*************/
Route::get('show/product/page','productController@show')->name('show_product_page');
/********add comment for user only*************/

Route::get('show/comment/page','commentController@show_comment_page')->name('show_comment_page');

/********add comment for user only*************/


/*****************************start the routes of product(admin)**********************************************/


Route::post('any/product/add','productController@add')->name('add_product');
Route::post('any/product/edit/{id}','productController@edit')->name('edit_product');
Route::get('any/product/delete/{id}','productController@delete')->name('delete_product');
/*****************************start the routes of product(admin)**********************************************/

/****************************start the route of products(user)************************************************/
Route::get('show/products/only','productController@show_products_only')->name('show_products_only');
Route::get('show/products/homepage','productController@show_products_homepage')->name('show_products_homepage');
Route::post('add/like/{id}','likeController@increase_counter')->name('add_like');

Route::post('add/comment','commentController@add')->name('add_comment');


/*************************multi authentication ***************************/
route::get('admin/path',function(){

return"test admin path";

})->middleware('AuthAdmin:webadmin');
route::get('admin/login','Admin@login_get');
route::post('admin/login','Admin@login_post');

Route::group(['prefix'=>'api','middleware'=>'Auth:api'],function(){


});


