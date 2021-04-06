<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DisqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopicController;
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

/*Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('main');

Route::get('admin', function () {
    return view('admin.index');
});



Route::get('admin/list/disque', [DisqueController::class, 'index']);
Route::get('admin/disque/edit{id}', [DisqueController::class, 'edit']);
Route::get('admin/disque/update', [DisqueController::class, 'update']);
Route::get('admin/create/disque', [DisqueController::class, 'create']);
Route::post('admin/disque/store', [DisqueController::class, 'store']);
Route::delete('admin/disque/delete/{id}', [DisqueController::class, 'destroy']);


Route::get('admin/category/list', [CategoriesController::class, 'index']);
Route::post('admin/category/store', [CategoriesController::class, 'store']);
Route::delete('admin/category/delete/{id}', [CategoriesController::class, 'destroy']);
Route::get('category/sort/{id}', [CategoriesController::class, 'showcategory']);

Route::get('contact',[ContactController::class,'create'])->name('contact');
Route::post('contact',[ContactController::class,'store']);

Route::get('index', 'TopicController@index');

Route::get('/profiles/{username}',[ProfileController::class,'show'])->name('profiles.show');
Route::get('topics', [TopicController::class, 'index'])->name('topics');
Route::resource('topics', TopicController::class)->except(['index']);
//Route::post('topics.store', TopicController::class ,'topics.store');


Route::get('/comments/{topic}', [CommentController::class, 'store'])->name('comments.store');
Route::post('/commentReply/{comment}',[CommentController::class, 'storeCommentReply'])->name('comments.storeReply');



Route::get('card', [CardController::class, 'index']);
Route::get('card/addItem/{id}', [CardController::class, 'addItem']);


Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('productdetail/{id}', [MainController::class, 'showproduct']);
