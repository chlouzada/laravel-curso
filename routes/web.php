<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\TestController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsAdminController;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

Route::get('/ola/{nome}', [TestController::class, 'index']);
// Route::get('/notas', [TestController::class, 'notas']);



Route::get('/', [PostsController::class, 'index']);

Route::middleware('auth')->prefix('admin')->group(function () {
  Route::prefix('posts')->group(function () {
    Route::get('', [PostsAdminController::class, 'index'])->name('admin.posts.index');
    Route::get('/create', [PostsAdminController::class, 'create'])->name('admin.posts.create');
    Route::post('/store', [PostsAdminController::class, 'store'])->name('admin.posts.store');
    Route::get('/edit/{id}', [PostsAdminController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/update/{id}', [PostsAdminController::class, 'update'])->name('admin.posts.update');
    Route::get('/destroy/{id}', [PostsAdminController::class, 'destroy'])->name('admin.posts.destroy'); 
  });
});

Route::get('/auth', function () {
    $user = User::find(1);
    Auth::login($user);

    if(Auth::attempt(['email' => 'carlos@email.com', 'password' => '123456']));
    {
      return "ok";
    }

    return "Falhou";

    
});

Route::get('/auth/logout', function () {
  Auth::logout();  
});
