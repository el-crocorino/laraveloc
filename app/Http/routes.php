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

Route::get('/', function () {
    return view('welcome');
});

get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');


get('article/{id}', [
    'uses' => 'ArticleController@show',
    'as' => 'article'
])->where('id', '[0-9]+');

get('bill/{id}', [
    'uses' => 'BillController@show',
    'as' => 'bill'
])->where('id', '[0-9]+');

Route::controller('users', 'UsersController');
#get('users', 'UsersController@getInfos');
#post('users', 'UsersController@postInfos');

