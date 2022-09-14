<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//agregar controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
Use App\HttpControllers\Frontend\RatingController;


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
Route::group(['middleware' => ['auth']], function (){
    Route::get('/',[App\Http\Controllers\HomeController::class,'index']);
    Route::get('blog/{post}', [App\Http\Controllers\PageController::class, 'post'])->name('post');
    Route::get('seller',[App\Http\Controllers\RolController::class,'home'])->name('seller');
<<<<<<< HEAD
    Route::get('buyer',[App\Http\Controllers\RolController::class,'index'])->name('buyer');
;
});
	Route::get('comments',[App\Http\Controllers\CommentController::class,'index']);
    Route::get('blog/{comments}', [App\Http\Controllers\CommentController::class, 'comment'])->name('comments');
=======

    Route::get('buyer',[App\Http\Controllers\RolController::class,'index'])->name('buyer');


	//rutas de prueba
	
>>>>>>> c29c51cda8030c9f159b894a057c3f0c514f1870

});
	


/*Route::group(['middleware' => ['auth']], function(){
	Route::get('/',[App\Http\Controllers\CommentController::class, 'comments']);
    //Route::get('blog/{comment}', [App\Http\Controllers\CommentController::class, 'comment'])->name('comment');
}); */


Auth::routes();


// rutas de controladores de midellware
Route::group(['middleware' => ['auth']], function () {
	Route::resource('roles', RolController::class);
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
	Route::resource('comments', CommentController::class);
	Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
	Route::post('/homeOrder', [App\Http\Controllers\HomeController::class,'storeOrder'])->name('homeOrder');
	Route::post('/homeOrderUpdate/{idOrder}', [App\Http\Controllers\HomeController::class,'updateOrder'])->name('homeUpdatedOrder');
	Route::post('postCreate', ['as' => 'postCreate', 'uses' => 'App\Http\Controllers\PostController@postCreate']);
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.profile', 'uses' => 'App\Http\Controllers\ProfileController@profile']);
	Route::get('profile/{id}', ['as' => 'profile.show', 'uses' => 'App\Http\Controllers\ProfileController@show']);
	Route::get('profile/edit', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons');
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('orders/{id}', ['as' => 'order.show', 'uses' => 'App\Http\Controllers\OrdenController@show']);
	Route::post('/comments', ['as' => 'comments.store', 'uses' => 'App\Http\Controllers\CommentController@store']);
	Route::get('add-rating', [RatingController::class, 'add'] );

});
