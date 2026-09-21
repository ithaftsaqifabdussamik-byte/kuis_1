<?php

use App\Http\Controllers\Kampus_psdku;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/kampuspsdku', [Kampus_psdku::class, 'index']
);