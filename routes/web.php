<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::prefix("dashboard")->middleware(['auth', 'verified'])->group(function () {
    # posts
   Route::get("/posts",[PostController::class, "index"])->name("posts.index");
   Route::get("/posts/create",[PostController::class, "create"])->name("posts.create");
   Route::post("/posts/store", [PostController::class, "store"])->name("posts.store");
   Route::get("/posts/{post:slug}/show", [PostController::class, "show"])->name("posts.show");
   Route::get("/posts/{post:slug}/edit", [PostController::class, "edit"])->name("posts.edit");
   Route::put("/posts/{post:slug}/update", [PostController::class, "update"])->name("posts.update");

    # users
   Route::get("/users", [UserController::class, "index"])->name("users.index");


   # my posts
   Route::get("/my-posts", [PostController::class, "myPosts"])->name("myposts.index");




});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
