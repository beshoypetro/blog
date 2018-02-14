<?php

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
//Route::post('/signup', 'UserController@signup');
//Route::post('/signin', 'UserController@signin');


Route::post('createPost', 'PostsController@createPost');
Route::post('/edit', 'PostsController@edit');
Route::post('/showPosts', 'PostsController@showPosts');
Route::post('/showComments', 'CommentsController@show');
Route::post('/editComment', 'CommentsController@edit');
Route::post('/addComment', 'CommentsController@create');
