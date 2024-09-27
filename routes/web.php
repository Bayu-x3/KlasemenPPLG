<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlasemenACewe;
use App\Http\Controllers\KlasemenBCewe;
use App\Http\Controllers\KlasemenACOWO;
use App\Http\Controllers\KlasemenBCOWO;

Route::get('/', function () {
    return view('welcome');
});
 