<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('index');
});


Route::get('/hakkimizda',[FrontendController::class, 'about'])->name('about');
Route::get('/blog',[FrontendController::class, 'blog'])->name('blog');
Route::get('iletisim',[FrontendController::class, 'contact'])->name('contact');
Route::get('elements',[FrontendController::class, 'elements'])->name('elements');
Route::get('index',[FrontendController::class, 'index'])->name('index');
Route::get('faaliyetlerimiz',[FrontendController::class, 'practice'])->name('faaliyetlerimiz');
Route::get('tekblog',[FrontendController::class, 'singleblog'])->name('tekblog');

Route::get('hizmetlerimiz',[FrontendController::class, 'services'])->name('hizmetlerimiz'); 