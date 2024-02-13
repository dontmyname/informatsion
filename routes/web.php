<?php

use App\Models\Registration;
use App\Models\Animals;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/new_clients', function (Request $req) {

    Registration::create([
        'name' => $req->name,
        'email' => $req->email,
        'year' => $req->year,
    ]);
    return redirect('/animals');
});


Route::get('/animals', function () {
        return view('animals');
    });

Route::post('/save_animals', function (Request $req) {

    Animals::create([
        'name' => $req->name,
        'type' => $req->type,
        'color' => $req->color,
    ]);
    return redirect('/car');
});



Route::get('/car', function () {
    return view('Car');
});
Route::post('/car', function (Request $req) {

    Car::create([
        'name' => $req->name,
        'color' => $req->color,
        'speed' => $req->speed,
    ]);
    return redirect('/');
});
