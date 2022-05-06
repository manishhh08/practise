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


/*defining route for pages
Route::get('/home',[UserController::class,'addUser']);
Route::get('/home',function(){return view ('home');    });*/
Route::get('/',function(){
    return view ('home');
});
Route::get('/home/user',[UserController::class,'namesurname']);
Route::get('/',function(){
    return view ('users.register');
});