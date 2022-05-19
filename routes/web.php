<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PlanController;

Route::resource('admin/plans', PlanController::class);

Route::get('/', function () {
    return view('welcome');
});
