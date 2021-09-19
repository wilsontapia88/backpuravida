<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'AuthController@login');
Route::post('signup', 'AuthController@signup');

Route::get('classes', 'ClassController@index');
Route::get('class/{id}', 'ClassController@show');

Route::get('courses', 'CourseController@index');
Route::get('coursesfortest', 'CourseController@indexForTest');
Route::get('course/{id}', 'CourseController@show');

Route::get('modules', 'ModulesController@index');
Route::get('modules/{id}', 'ModulesController@show');

Route::get('posts', 'PostController@index');
Route::get('post/{id}', 'PostController@show');
    Route::get('courses', 'CourseController@index');
    // Route::get('coursesfortest', 'CourseController@indexForTest');
    Route::get('course/{id}', 'CourseController@show');

Route::get('professionals', 'ProfessionalController@index');
Route::get('professional/{id}', 'ProfessionalController@show');

Route::get('materiais', 'MateriaisController@index');

Route::group(['prefix' => 'auth'], function () {


    Route::get('perfil', 'PerfilController@getUser');




    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');

        // Route::get('courses/{id}', 'AulasController@show');

    });
});
