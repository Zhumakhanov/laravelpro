<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PlayerController;

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

Route::get('post/add', function () {
    DB::table('post')->insert([
        'id' => '1',
        'title' => 'abs',
        'body' => 'front',
    ]);
});



Route::get('post',[PostController::class, 'index']);
Route::get('post/create', function() {
    return view('post.create');

});

Route::post('post/create', [PostController::class, 'store'])->name('add-post');

Route::get('post/{id}', [PostController::class, 'get_post']);




Route::get('/player','App\Http\Controllers\PlayerController@index');

Route::post('/addimage', 'App\Http\Controllers\PlayerController@store')->name('addimage');

Route::get('/send','App\Http\Controllers\MailController@send');

Route::get('main/{lang}', function($lang){
    App::setlocale($lang);
    return view('home');
});