<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('story/' , function(){
//     return view('story.home');
// });



//  DashBord Story 
Route::get('admin/story/home/'   , [App\Http\Controllers\StoryController::class , 'index'])->name('admin.story.home');
Route::get('admin/story/create/' , [App\Http\Controllers\StoryController::class , 'create'])->name('admin.story.create');
Route::post('admin/story/store/' , [App\Http\Controllers\StoryController::class , 'store'])->name('admin.story.store');
Route::get('admin/story/edit/{id}/' , [App\Http\Controllers\StoryController::class , 'edit'])->name('admin.story.edit');
Route::post('admin/story/update/{id}' , [App\Http\Controllers\StoryController::class , 'update'])->name('admin.story.update');
Route::get('admin/story/destroy/{id}/' , [App\Http\Controllers\StoryController::class , 'destroy'])->name('admin.story.destroy');
Route::get('admin/story/trashed/' , [App\Http\Controllers\StoryController::class , 'trashed'])->name('admin.story.trashed');
Route::get('admin/story/trashed/restore/{id}/' , [App\Http\Controllers\StoryController::class , 'resTore'])->name('admin.story.trashed.resTore');
Route::get('admin/story/trashed/delete/{id}/' , [App\Http\Controllers\StoryController::class , 'deleteEnd'])->name('admin.story.trashed.delete');



//  View Story 

Route::get('story/' ,  [App\Http\Controllers\ViewStoryController::class , 'home'])->name('story.home');

