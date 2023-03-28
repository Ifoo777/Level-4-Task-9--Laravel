<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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


// Use the / to display home page
Route::get('/', function () {
    $posts = DB::table('blog_posts')->get();
    return view('home', ['posts' => $posts]);
});

// Use the /home to display home page
Route::get('/home', function () {
    $posts = DB::table('blog_posts')->get();
    return view('home', ['posts' => $posts]);
});


// Search for a specific ID in the database that returns a result
Route::get('/blog/{id}', function ($id_search) {
    $posts = DB::table('blog_posts')->where('id', '=', ['id' => $id_search])->get();
    return view('blog', ['posts' => $posts]);
});
