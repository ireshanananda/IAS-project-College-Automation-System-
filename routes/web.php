<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subjectcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
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




//Admin routes
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){


    //home route
    Route::get('/', function () {
        return view('Admin.index');
    });

    //create subject view
    Route::get('/subject/create', function () {
        return view('Admin.AddSubject');
    });




//add subjects to database
Route::post('controller/subject/create',[AdminController::class, 'addSubject']);

//add child subjects to database
Route::post('controller/resource/add',[AdminController::class, 'addresource']);
//subject view
Route::get('/subject/view/{id}',[AdminController::class, 'subjectView']);
//delete subject
Route::get('controller/subject/delete/{id}',[AdminController::class, 'subjectDelete']);
//delete child subs
Route::get('controller/childsubject/delete/{id}',[AdminController::class, 'childSubjectDelete']);
//profile view
Route::get('/profile/view/{id}',[AdminController::class, 'profileView']);
Route::get('/profile/delete/{id}',[AdminController::class, 'profileDelete']);
//useers
Route::get('/users',[AdminController::class, 'Users']);
Route::get('/subject',[AdminController::class, 'Subjects']);
Route::get('controller/subject/edit/{id}',[AdminController::class, 'editSubject']);
Route::post('controller/subject/update',[AdminController::class, 'updateSubject']);

});


//users routes

Route::prefix('user')->middleware('auth')->group(function(){





//enroll for subject
    Route::get('/subject/enroll/{id}',[UserController::class, 'enroll']);
  //remove subject
    Route::get('/subject/denroll/{id}',[UserController::class, 'denroll']);
    //index
    Route::get('/',[UserController::class, 'Index']);
    //all subjects
    Route::get('/subject',[UserController::class, 'Subjects']);
//subject view
    Route::get('/subject/view/{id}',[UserController::class, 'SubjectView']);


}

);
//home page
Route::get('/', function () {
    return view('Auth.login');
});

Route::get('/contactus', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



