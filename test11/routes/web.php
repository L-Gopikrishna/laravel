<?php

use App\Http\Controllers\RegisterController;
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
use App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades;
use Spatie\YamlFrontMatter\YamlFrontMatter;

//Route::get('/', function () { return view('welcome'); })->name('welcome');

Route::get('/', function () {

    return view('posts', [
        'posts' => Post::all()
    ]);

})->name('posts');

Route::get( 'post/{post?}', function ($slug) {

    return view('post', [
                'post' => Post::find($slug) ]);

    }
)->name('post');

