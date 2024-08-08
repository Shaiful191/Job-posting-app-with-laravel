<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Listings Routes:

//All listings:
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create',[ListingController::class, 'create'])->middleware('auth');

//Store Listing Data
Route::post('/listings',[ListingController::class, 'store'])->middleware('auth');

//Show edit form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');

//Update listing
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');

//Manage Listings
Route::get('/listings/manage', [ListingController::class,'manage'])->middleware('auth');


//Single Listing: Use Route Binding //It's affect above route if it push up that's why it give in below.
Route::get('/listings/{listing}',[ListingController::class, 'show']);





//User Routes:

//Show Register create form
Route::get('/register', [UserController::class,'create'])->middleware('guest');

//Create New user
Route::post('/users', [UserController::class,'store']);

//User logout
Route::post('/logout', [UserController::class,'logout'])->middleware('auth');


//Show login Form
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

//Login user
Route::post('/users/authenticate', [UserController::class,'authenticate']);




/*

Common Resource Routes:

// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

*/



// Route::get('/hello',function(){
//     return response('<h1>hello world</h1>',200)
//     ->header('Contant-Type','text/plain');
// });

// Route::get('/posts/{id}',function($id){
//     return response('Post '.$id);
// })->where('id','[0-9]+');


// Route::get('/search',function(Request $request){
//   return $request->name . " ".$request->city;
// });