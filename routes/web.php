<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CoursesController;
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

Route::get('/Home', function () {
    return view('fronts/include/index');
});
Route::get('/About', function () {
    return view('fronts/About');
});
Route::get('/Courses', function () {
    return view('fronts/Courses');
});
Route::get('/Trainers', function () {
    return view('fronts/Trainers');
});
Route::get('/Events', function () {
    return view('fronts/Events');
});
Route::get('/Pricing', function () {
    return view('fronts/Pricing');
});
Route::get('/Contact', function () {
    return view('fronts/Contact');
});


// *******************************   Front end 








Route::get('/',[HomeController::class,'index']);

// *********  USER START ************* //
Route::get('/UserForm',[UserController::class,'User_Function'])->name('User.Form');
Route::post('/UserForm',[UserController::class,'Form_Submit_validation'])->name('User.Form');
Route::get('/UserList',[UserController::class,'User_List'])->name('User.List');
Route::get('/User/Update/{id}',[UserController::class,'User_Edit']);
Route::put('/User/Update/{id}',[UserController::class,'User_Update']);
Route::get('/User/Delete/{id}',[UserController::class,'User_Delete']);



// ********** Courses  Start *************// 

Route::get('/Courses/List',[CoursesController::class,'Courses_List'])->name('Courses.List');
Route::get('/Courses/Form',[CoursesController::class,'Courses_Form'])->name('Courses.Form');
Route::post('/Courses/Form',[CoursesController::class,'Courses_Submit_Validation'])->name('Courses.Form');
