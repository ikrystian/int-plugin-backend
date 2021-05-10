<?php

use App\Imports\AddressImport;
use App\Models\address;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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
    return redirect('/dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->post('/import', function () {
    address::getQuery()->delete();
    Excel::import(new AddressImport, request()->file('file'));
    return Redirect::back()->withErrors(['Finished']);

})->name('import');

Route::middleware(['cors'])->group(function () {

    Route::get('cities', function () {
        return address::select('city')->distinct()->orderBy('city', 'ASC')->get()->toJson();
    });

    Route::get('streets/{city}', function ($city) {
        return address::where('city', $city)->select('street')->distinct()->orderBy('street', 'ASC')->get()->toJson();
    });

    Route::get('numbers/{city}/{street}', function ($city, $street) {
        return address::where('street', $street)
            ->where('city', $city)
            ->select('number')
            ->distinct()
            ->orderByRaw('LENGTH(number)', 'asc')
            ->orderBy('number', 'asc')
            ->get()
            ->toJson();
    });

    Route::get('numbers/{city}', function ($city) {
        return address::where('city', $city)
            ->select('number')
            ->distinct()
            ->orderByRaw('LENGTH(number)', 'asc')
            ->orderBy('number', 'asc')
            ->get()
            ->toJson();
    });
});

Route::get('/register', function() {
    return redirect('/login');
});
