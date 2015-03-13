<?php

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

Route::get('/', 'AdminController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
//Route::filter();
/*
 * Route for Api Rest
 *
 */
Route::group(array('prefix' => 'api'), function () {
    Route::resource('menus', 'MenuController', array('only' => array('index', 'show')));
    Route::resource('competences', 'CompetenceController', array('only' => array('index')));
    Route::resource('socials', 'SocialController', array('only' => array('index')));
    Route::resource('contact', 'ContactController', array('only' => array('index','store')));
});
/*
 * Route for administration
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function () {

    Route::get('/', 'AdminController@index');
    /*
     * routes for menu administration
     */
    Route::get('/menus', 'MenuController@index');
    /*
     * routes for competences administration
     */
    Route::get('/competences', 'CompetenceController@index');
    /*
     * routes for categories administration
     */
    Route::get('/categories', 'CategoryController@index');
    /*
     * routes for posts administration
     */
    Route::get('/posts', 'PostController@index');


});
