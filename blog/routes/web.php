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
    return view('home');
});

Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function(){
   Route::resource('users', 'UsersController');
   Route::get('users/{id}/destroy', [
    'uses' =>'UsersController@destroy',
     'as' => 'admin.users.destroy'
   ]);

   Route::resource('categories', 'CategoriesController');
   Route::get('categories/{id}/destroy',[
    'uses' =>'categoriesController@destroy',
     'as' => 'admin.categories.destroy'
   ]);
   
   Route::resource('tags', 'TagsController');
   Route::get('tags/{id}/destroy',[
    'uses' =>'tagsController@destroy',
     'as' => 'admin.tags.destroy'
   ]);

   Route::resource('articles', 'ArticlesController');
   Route::get('articles/{id}/destroy',[
    'uses' =>'articlesController@destroy',
     'as' => 'admin.articles.destroy'
   ]);
   
   Route::resource('images', 'ImagesController');
   Route::get('images',[
    'uses' =>'ImagesController@index',
     'as' => 'admin.images.index'
   ]);

});


Route::get('admin/auth/login', [
  'uses'  => 'Auth\LoginController@showLoginForm',
  'as'    => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
  'uses'  => 'Auth\LoginController@login',
  'as'    => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
  'uses'  => 'Auth\LoginController@logout',
  'as'    => 'admin.auth.logout'
]);

Route::get('/home', 'HomeController@index')->name('home');