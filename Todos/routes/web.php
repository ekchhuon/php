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

Route::get('/new', function () {
    return view('new');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/page', [
  'uses' => 'PagesController@hello'
]);


// mostly used to interact with view directly
Route::get('/todos', [
  'uses' => 'TodosController@index',
  'as'   => 'todos'
]);

// Route::get('/todos', 'TodosController@index');

//Delete
Route::get('todo/delete/{id}', [
  'uses'  => 'TodosController@delete',
  'as'    => 'todo.delete' // name we're gonna give to the route
]);

//Update
Route::get('todo/update/{id}', [
  'uses'  => 'TodosController@update',
  'as'    => 'todo.update' // name we're gonna give to the route
]);

//save update
Route::post('todo/save/{id}', [
  'uses'  => 'TodosController@save',
  'as'    => 'todo.save' // name we're gonna give to the route
]);

//Insert
Route::post('/create/todo', [
  'uses' => 'TodosController@store'
]);

//update complete status 
Route::get('todo/completed/{id}', [
  'uses'  => 'TodosController@completed',
  'as'    => 'todo.completed'
]);
