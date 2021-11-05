<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

Route::get('/about', [TaskController::class, 'show_name']);
Route::post('/about', [TaskController::class, 'send_name']);
Route::get('/contact', [TaskController::class, 'index']);
Route::get('/contact/{id}', [TaskController::class, 'show']);



//
//Route::get('tasks', function(){
//
//$tasks = [
//
//'first-task' => 'Task1',
//'second-task' => 'Task2',
//'third-task' => 'Task3'
//
//];
//
//return view('tasks', compact('tasks'));
//
//});
//
//Route::get('show/{id}', function($id){
//
//    $tasks = [
//
//        'first-task' => 'Task1',
//        'second-task' => 'Task2',
//        'third-task' => 'Task3'
//        
//        ];
//
//$task = $tasks[$id];
//return view('show', compact('task'));
//});