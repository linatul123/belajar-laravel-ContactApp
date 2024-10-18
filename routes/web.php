<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function(){
    $contacts = [];
    $Faker = Faker::create();
    for($i = 1; $i <= 10; $i++){
        $contacts[]=[
            'name' => $Faker->name,
            'email' => $Faker->unique()->safeEmail,
            'phone' => $Faker->phoneNumber
        ];
    };
    return view("homepage", ['contacts' => $contacts]);
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');