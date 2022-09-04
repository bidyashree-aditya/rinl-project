<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\web\UserComplaints;
use Illuminate\Support\Facades\Route;



Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/check', [UserComplaints::class, 'create_Complaint']);
