<?php


use App\Post;
use App\User;
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

//Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//    return view('adminPage');
//}]);

Route::group(['middleware' => ['auth']], function () {

Route::get('/create','PostsController@create');
Route::post('posts','PostsController@store');
Route::get('/','PostsController@index');
Route::get('/post/{post_id}','PostsController@show');


Route::get('/contactUs}','TestController1@contact');
Route::get('/terms}','TestController1@terms');
Route::get('/privacy}','TestController1@privacy');


Route::post('posts/{post_id}/comments','CommentsController@store');


    Route::group(['middleware' => ['admin']], function () {

        Route::get('/admin','AdminController@index');
        Route::get('/controlUsers','AdminController@showUsers');
        Route::get('/controlPosts','AdminController@showPosts');
        Route::get('/controlComments','AdminController@showComments');
        Route::get('/addForm','AdminController@addForm');
        Route::post('/addUser','AdminController@addUser');
        Route::get('/userAdmin','AdminController@userAdmin');
        Route::post('/makeAdmin','AdminController@makeAdmin');
        Route::get('/preEdit','AdminController@preEdit');
        Route::post('/editPost','AdminController@editPost');
        Route::get('/preApprovePost','AdminController@preApprovePost');
        Route::post('/approvePost','AdminController@approvePost');
        Route::get('/preApproveComment','AdminController@preApproveComment');
        Route::post('/approveComment','AdminController@approveComment');


    });


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
