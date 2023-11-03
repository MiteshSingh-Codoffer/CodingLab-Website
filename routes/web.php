<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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





Route::group(['middleware' => 'guest'], function () {
    // Basic or login page Route
    Route::get('/login', function () {
        return view('login');
    });
    Route::post('/login', [UserController::class, 'loginUser'])->name('login');

    // Basic or signup page Route
    Route::get('/signup', function () {
        return view('signup');
    });

    // signup page route

    Route::post('/signup', [UserController::class, 'signupUser'])->name('signup');
});

Route::group(['middleware' => 'auth'], function () {

    // Basic or Hello page Route
    Route::get('/hello', function () {
        return view('hello');
    });

    // Basic or Hello in parameter Route page
    // Route::get('/hello/{id?}/comment/{comm?}', function ($id=null,$comm=null) {
    //     if ($id){
    //         return "<h1>Post ID : ".$id."</h1><h2>".$comm."</h2>";
    //     }
    //     else{
    //         return "<h1>No ID Found</h1>";
    //     }
    // });

    // Important Route Method whereNumber,whereAlpha,whereAlphaNumeric,whereIn, where
    // Route::get('/hello/{id?}/', function ($id=null) {
    //     if ($id){
    //         return "<h1>Post ID : ".$id."</h1>";
    //     }
    //     else{
    //         return "<h1>No ID Found</h1>";
    //     }
    // })->whereNumber('id');

    // Basic or About page Route
    Route::get('/about', function () {
        return view('about');
    });

    // Basic or Services page Route
    Route::get('/services', function () {
        return view('services');
    });

    // Basic or Contact page Route
    Route::get('/contact', function () {
        return view('contact');
    });

    // Basic or Feedback page Route
    Route::get('/feedback', function () {
        return view('feedback');
    });



    // Basic or gallery page Route
    Route::get('/gallery', [UserController::class, 'showUser'])->name('gallery');


    // Basic or insertview page Route
    Route::get('/insertview', function () {
        return view('insertview');
    });

    Route::post('/insertview', [UserController::class, 'insertUser'])->name('insertview');

    // Delete page Route
    Route::get('/gallery/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

    // Update Page Route
    Route::get('updateview/{id}', [UserController::class, 'updateUser'])->name('updateUser');
    Route::post('updateview/{id}', [UserController::class, 'sendUser'])->name('sendUser');

    // Basic or logout page Route
    Route::get('/logout', [UserController::class, 'logoutUser'])->name('logout');
    Route::get('/', function () {
        return view('welcome');
    });

  // Basic or singleview page Route
  Route::get('/singleview/{id}', [UserController::class, 'singleUser'])->name('singleUser');

   // Basic or  page Route
   Route::get('/album', [UserController::class, 'albumUser'])->name('albumUser');


});
