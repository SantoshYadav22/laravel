<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\RelationModel;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateController;
// Illuminate\Foundation\ComposerScripts::postAutoloadDump
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $fmdata=RelationModel::orderBy('id','desc')->paginate(9);
    return view('dashboard',compact("fmdata"));
})->name('dashboard');

Route::get('logs',[UpdateController::class, 'Updates'])->name('update');


// Route::view('add','addmember');
// Route::post('add',[RelationController::class, 'addData']);


Route::get('/addmem',[RelationController::class, 'Form']);
Route::post('/transfer',[RelationController::class, 'addData'])->name('student.save');



Route::view('log','Login');
Route::post('log',[LoginController::class, 'Login']);


Route::get('list/edit/{id}',[UpdateController::class, 'Edit']);

Route::post('list/updates/{id}',[UpdateController::class, 'Update']);
Route::get('list/delete/{id}',[UpdateController::class, 'Delete']);

// pdf

Route::get('/pdf', [App\Http\Controllers\UpdateController::class, 'createPDF'])->name('UpdateController.createPDF');

Route::get('/product/pdf', [App\Http\Controllers\UpdateController::class, 'createPDF'])->name('fmdata.pdf');

// excel
Route::get('/export', [App\Http\Controllers\UpdateController::class, 'export'])->name('UpdateController.export');

// component
Route::view('comp/','CompoUser');



