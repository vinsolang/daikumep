<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhyUsController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectCredentialController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ServiceController;
use Illuminate\Foundation\Console\AboutCommand;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('professional/project', [ProjectCredentialController::class, 'index'])->name('project');

Route::post('/sendmail', [SendMailController::class, 'sendMail'])->name('send.mail');
