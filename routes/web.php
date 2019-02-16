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

/*

    GET /projects (index)

    GET /projects/create (create)

    get /projects/1 (show)

    POST /projects (store)

    GET /projects/1/edit (edit)

    PATCH /projcets/1 (update)

    DELETE /projects/1 (destroy)

*/

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::resource('/projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');

// /* GET /projects (index) */
// Route::get('/projects', 'ProjectsController@index');

// /* POST /projects (store) */
// Route::post('/projects', 'ProjectsController@store');

// /* GET /projects/create (create) */
// Route::get('/projects/create', 'ProjectsController@create');

// /* GET /projects/1 (show) */
// Route::get('/projects/{project}/', 'ProjectsController@show');

// /* GET /projects/1/edit (edit) */
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');

// /* PATCH /projcets/1 (update) */
// Route::get('/projects/{project}/update', 'ProjectsController@eupdate');

// /* DELETE /projects/1 (destroy */
// Route::get('/projects/{project}/destroy', 'ProjectsController@destroy');
