<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

// Route::get('/', function () {
//     return Inertia::render('Commerce', [
//         'canRegister' => Features::enabled(Features::registration()),
//     ]);
// })->name('home');

Route::get('/', function() {
    return Inertia::render('Commerce');
});

Route::get('/Products', function() {
    return Inertia::render('Products');
});

Route::get('/AboutUs', function() {
    return Inertia::render('AboutUs');
});

Route::get('/ContactUs', function() {
    return Inertia::render('ContactUs');
});

Route::get('/Register', function() {
    return Inertia::render('auth/Register');
});

Route::get('/Login', function(){
    return Inertia::render('auth/Login');
});

Route::get('/product/{id}', function ($id) {
    return Inertia::render('ProductPage', [
        'id' => $id
    ]);
});


// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
