<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/portfolio', 'App\Http\Controllers\PagesController@portfolio');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');
Route::get('/blogs', 'App\Http\Controllers\PagesController@blogs');

Route::get('/portfolio/{id}', 'App\Http\Controllers\ProjectsController@project');
Route::get('/blog/{id}', 'App\Http\Controllers\BlogsController@blog');

Route::get('/download/{file}', 'App\Http\Controllers\DownloadsController@download');

Route::get('/instagram', 'App\Http\Controllers\SocialMediasController@instagram');
Route::get('/twitter', 'App\Http\Controllers\SocialMediasController@twitter');
Route::get('/linkedin', 'App\Http\Controllers\SocialMediasController@linkedin');
Route::get('/github', 'App\Http\Controllers\SocialMediasController@github');

Route::post('/sub', 'App\Http\Controllers\UserEmailsController@store');
Route::post('/query', 'App\Http\Controllers\UserQueriesController@store');

Route::get('/clear/cache', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    return 'Cache cleared.';
});

Route::get('/success', function() {
    return view('form_submit.onsubmit');
})->name('success');

Route::get('/generate/sitemap', function() {
    SitemapGenerator::create('https://jimminc.tech/')->writeToFile('sitemap.xml');
    return "Sitemap generated.";
})->name('sitemap');