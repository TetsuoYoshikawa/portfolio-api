<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\MailSendController;
use App\Http\Controllers\ContactsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/portfolio", [PortfoliosController::class, "get"]);
Route::get("/skill", [SkillsController::class, "get"]);
Route::get('/mail', [MailSendController::class, 'send']);

Route::post('/contact', [ContactsController::class, 'send']);
