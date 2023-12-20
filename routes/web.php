<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login_SignUp_Controller;
use App\Http\Controllers\User_Interaction_Controller;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login",[Login_SignUp_Controller::class,"login"])->middleware('alreadyLoggedIn');
Route::get("/signup",[Login_SignUp_Controller::class,"signup"])->middleware('alreadyLoggedIn');
Route::post("/signup-user",[Login_SignUp_Controller::class,"signupUser"])->name('signup-user');
Route::post("/login-user",[Login_SignUp_Controller::class,"loginUser"])->name('login-user');
Route::get("/logout-user",[Login_SignUp_Controller::class,"logoutUser"]);
Route::get("/user-dashboard",[Login_SignUp_Controller::class,"userDashboard"])->middleware('isLoggedIn');
Route::post("/book-vaccine",[User_Interaction_Controller::class,"bookVaccine"])->name('book-vaccine');
Route::get("/book-vaccine",[User_Interaction_Controller::class,"bookVaccine"]);
Route::post("/vac-history",[User_Interaction_Controller::class,"vacHistory"])->name('vac-history');
Route::post("/user-details",[User_Interaction_Controller::class,"userDetails"])->name('user-details');
Route::post("/edit-user-details",[User_Interaction_Controller::class,"editUserDetails"])->name('edit-user-details');
Route::post("/confirm-user-details-edit",[User_Interaction_Controller::class,"confirmUserDetailsEdit"])->name('confirm-user-details-edit');
Route::post("/selected-vaccine",[User_Interaction_Controller::class,"selectedVaccine"])->name('selected-vaccine');
Route::get("/selected-vaccine",[User_Interaction_Controller::class,"selectedVaccine"])->name('selected-vaccine');
Route::post("/selected-hospital",[User_Interaction_Controller::class,"selectedHospital"])->name('selected-hospital');
Route::post('/selected-date', [User_Interaction_Controller::class,"selectedDate"])->name('selected-date');
Route::post('/search-vaccine', [SearchController::class,"searchVaccine"])->name('search-vaccine');
Route::post('/search-hospital', [SearchController::class,"searchHospital"])->name('search-hospital');
