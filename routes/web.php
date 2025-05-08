<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\TagController;
use App\Models\Director;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

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


Route::get("/", [ProductController::class, "index"])->name("product.index");
Route::get("/news", [ProductController::class, "info"])->name("product.info");
Route::get("/news/{id}", [ProductController::class, "show"])->name("product.show");
Route::get("/admin", [AdminController::class, "create"])->name("admin.create");
Route::post("/admin", [AdminController::class, "store"])->name("admin.login");
Route::post("/admin/logout", [DirectorController::class, "logout"])->name("admin.logout");
Route::get("/admin/create", [ProductController::class, "create"])->name("product.create")->middleware("admin");
Route::post("/admin/store", [ProductController::class, "store"])->name("product.store")->middleware("admin");
Route::get("/admin/questions", [DirectorController::class, 'index'])->name("director.index");
Route::get("/director/write", [DirectorController::class, 'write'])->name("director.writeform");
Route::post("/director/write", [DirectorController::class, 'store'])->name("director.write");
Route::post("/director/question", [DirectorController::class, 'storeuser'])->name("director.userwrite");
Route::get("/uchitelyam", [ShoesController::class, "costume"])->name("shoes.costume");
Route::get("/roditelyam", [ShoesController::class, "index"])->name("shoes.index");
Route::get("/okusylarga", [ShoesController::class, "blazer"])->name("shoes.blazer");

Route::get("/rules", function(){
    return view("components/rules");
});

Route::get("/bailanys", function(){
    return view("product.bailanys");
})->name("bailanys");

Route::get("/docs/1", function(){
    return view("pdf.1");
});

Route::get("/docs/2", function(){
    return view("pdf.2");
});

Route::get("/docs/3", function(){
    return view("pdf.3");
});

Route::get("/about/administration", function(){
    return view("about.administration");
});
Route::get("/about/teachers", function(){
    return view("about.teachers");
});
Route::get("/about/history", function(){
    return view("about.history");
});



Route::get('/application', [ApplicationController::class, 'showForm'])->name('application.form');
Route::post('/application', [ApplicationController::class, 'submitForm'])->name('application.submit');



Route::get("/questions", function(){
    return view("product.questions");
})->name("questions");

Route::get("/support", function(){
    return view("product.support");
})->name("support");
Route::get("/support/terror1", function(){
    return view("product.t1");
})->name("t1");
Route::get("/support/terror2", function(){
    return view("product.t2");
})->name("t2");
Route::get("/support/terror3", function(){
    return view("product.t3");
})->name("t3");

Route::get("/director/question", function(){
    return view("admin.user");
})->name("director.userwriteform");
Route::get("/polites", function(){
    return view("components/polites");
});
Route::get("/about", function(){
    return view("components/about");
});


Route::get('/news', [NewsController::class, "allindex"])->name("news.index");
Route::post('/news', [NewsController::class, "store"])->name("news.store");
Route::get('/news/{id}', [NewsController::class, "show"])->name("news.show");



Route::get("/admin/tag", [TagController::class, "index"])->name("tag.index");

Route::get("/admin", [AdminController::class, "create"])->name("admin.login.show");
Route::post("/admin", [AdminController::class, "store"])->name("admin.login");
Route::post("/auth/logout", [AdminController::class, "logout"])->name("admin.logout");



require __DIR__.'/auth.php';
