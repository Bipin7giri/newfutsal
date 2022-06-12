<?php

use App\Http\Livewire\AboutUs;
use App\Http\Livewire\Admin\Add;
use App\Http\Livewire\Admin\Category;
use App\Http\Livewire\Admin\District;
use App\Http\Livewire\Admin\SportCenter;
use App\Http\Livewire\Admin\User;
use App\Http\Livewire\BookingPage;
use App\Http\Livewire\Location;
use App\Http\Livewire\SportCategory;
use App\Http\Livewire\Sportcenter\ArenaList;
use App\Http\Livewire\Sportcenter\Dashboard;
use App\Http\Livewire\Sportcenter\Sport\Add as SportAdd;
use App\Http\Livewire\Welcome;
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

Route::get('/', Welcome::class)->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    

    // Route::middleware(['users'])->group(function () {
    //     Route::get('/dashboard', UserDashboard::class)->name('dashboard');
    // });
    // Route::middleware(['users'])->group(function () {
    //     Route::get('/dashboard', UserDashboard::class)->name('dashboard');
    // });
    Route::middleware(['bitmicrosys'])->group(function () {
        Route::get('/check', function(){dd('done!');})->name('dashboard');
    });
    Route::middleware(['sportCenter'])->group(function(){
     Route::get('/home',Dashboard::class)->name('home');
     Route::get('/arena',ArenaList::class)->name('arena');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get("/admin/add", Add::class)->name("area");
    Route::get("/admin/category", Category::class)->name("category");
    Route::get("/admin/district", District::class)->name("district");
    Route::get("/admin/sportcenter", SportCenter::class)->name("sportcenter");
    Route::get("/admin/user", User::class)->name("user");
    
});

Route::get("/location",Location::class)->name("location");
Route::get("/edit_arena",Location::class)->name("edit_arena");
Route::get("/aboutus",AboutUs::class)->name("aboutus");
Route::get("/booking/{sportCenter_id}",BookingPage::class)->name("booking");
Route::get("/sportCategory",SportCategory::class)->name('sportCategory');


// for sportcenter



