<?php

use App\Models\Car;
use App\Models\Foot;
use App\Models\Animals;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome', ['cars' => Car::all()]);
});

Route::get('/test', function () {
    return view('test');
});

Route::post('/save_car', function (Request $req) {

    Car::create([
        'name' => $req->name,
        'milleage' => $req->milleage,
        'color' => $req->color,
        'price' => $req->price,
        'position' => $req->position,
        'year' => $req->year
    ]);

    return back()->with('success', 'Car created successfully');
});
Route::post('/save_client', function (Request $req) {

    Client::create([
        'name' => $req->name,
        'age' => $req->age,
        'phone' => $req->phone
    ]);

    return back();
});
Route::get('/delete_car/{id}', function ($id) {
    Car::where('id', '=', $id)->first()->delete();

    return back()->with('success', 'Car Deleted successfully');
});




Route::get('/animals', function () {
    return view('animals');
});

Route::get('/animals', function () {
    return view(
        'animals',
        ['animals' => animals::all()]
    );
});

Route::post('/save_animals', function (Request $req) {
    animals::create([
        'name' => $req->name,
        'color' => $req->color,

        'type' => $req->type
    ]);
    return back();
});



Route::get('/foot', function () {
    return view('foot');
});
Route::get('/foot', function () {
    return view('foot', ['foot' => foot::all()]);
});

Route::post('/save_foot', function (Request $req) {
    Foot::create([
        'name' => $req->name,
        'ccal' => $req->ccal,
        'type' => $req->type
    ]);
    return back();
});
