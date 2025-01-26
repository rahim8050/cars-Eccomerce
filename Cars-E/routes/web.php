<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   
    // $person =[
    //     'name'=> 'John Doe',
    //     'age'=> 25,
    //     'city'=> 'Nairobi',
    // ];
    // dd($person);
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Route::fallback(function () {
//     return view('404');
// })->name('404');
Route::get('/sum{a}/{b}', function (float $a, float $b) {
     return  $a + $b;
})->whereNumber(['a', 'b']);
// Route::post('/car', [CarController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);

