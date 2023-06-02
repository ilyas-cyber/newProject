<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;

// serve the index.html file
Route::get('/', function () {
    return response()->file(public_path('index.blade.php'));
});

// serve the index.html file
Route::get('/map', function () {
    return response()->file(public_path('map.blade.php'));
});

//Routing users login page
Route::get("/login",function(){
    return response()->file(public_path('login.blade.php'));
});


//Site-Owner Routing
Route::get("owner",function(){
    return response()->file(public_path('site-owner.blade.php'));
});

// serve pvCalc.html file
Route::get("/pvcalc",function(){
  return response()->file(public_path('pvCalc.blade.php'));
});

//Routing to partner companies 
Route::get("/partner",function(){
    return response()->file(public_path('partner.blade.php'));
});

//Routing to Thanks 
Route::get("thanks",function(){
    return response()->file(public_path('thanks.blade.php'));
});

// serve static files
Route::prefix('assets')->group(function () {
    Route::get('/{path}', function ($path) {
        return response()->file(public_path("assets/$path"));
    });
});

Route::prefix('images')->group(function () {
    Route::get('/Feautred-Section/{path}', function ($path) {
        return response()->file(public_path("images/Feautred-Section/$path"));
    });

    Route::get('/form-image/{path}', function ($path) {
        return response()->file(public_path("images/form-image/$path"));
    });

    Route::get('/mainLogo/{path}', function ($path) {
        return response()->file(public_path("images/mainLogo/$path"));
    });

    Route::get('/PVpacks/{path}', function ($path) {
        return response()->file(public_path("images/PVpacks/$path"));
    });

    Route::get('/solarPack/{path}', function ($path) {
        return response()->file(public_path("images/solarPack/$path"));
    });

    Route::get('/Logo/{path}', function ($path) {
        return response()->file(public_path("images/Logo/$path"));
    });

    Route::get('/Solar Panel/{path}', function ($path) {
        return response()->file(public_path("images/Solar Panel/$path"));
    });
});

// Check whether the user exists in the database (Authentication)
Route::post('/login', 'Controller@login');
Route::post('/verify', 'Controller@verify');

//Login Routes
Route::view('add','addmember');
Route::post('add',[MemberController::class, 'AddData']);

 
// Route::get("/submit-form",function(){
//     return response()->file(public_path('contact.blade.php'));
// });

Route::view('submit-form','contact');
Route::post('submit-form',[MemberController::class, 'clientData']);  


//Routing admin login Page
Route::view('admin-login','admin-login');
Route::post('admin-login',[MemberController::class, 'adminCheck']);  


//Admin routing
Route::view('admin','admin');
Route::post('admin ',[MemberController::class, 'adminCheck']);  

//Signup routing
Route::view('signup','signup');
Route::post('signup ',[MemberController::class, 'AddUser']);  

//Partner login routing
Route::view('partner-login','partner-login');
Route::post('partner-login ',[MemberController::class, 'PartnerCheck']);  


//Site-Owner login
Route::view('owner-login','owner-login');
Route::post('owner-login ',[MemberController::class, 'OwnerCheck']);  

Route::get('/Solar Panel/{path}', function ($path) {
    return response()->file(public_path("images/Solar Panel/$path"));
});