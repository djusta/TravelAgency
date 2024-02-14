<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WebsiteController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/users', [UsersController::class, 'index'])->name('users.index');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function() {
    Route::redirect('/', '/admin/dashboard', );
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
    Route::resource('destinations', DestinationController::class);
    Route::resource('packages', PackageController::class);
    Route::resource('leads', LeadController::class);
    Route::get('/delete/location/{id}', [PackageController::class, 'locationDestroy'])->name('delete.location');
});

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
*/
Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/contact-us', 'contactUs')->name('contact');
    Route::get('/destinations/{slug}', 'destination')->name('destination');
    Route::get('/package/{slug}', 'package')->name('package');
    Route::post('/lead', 'storeLead')->name('storeLead');
    Route::fallback('notFound'); // Catch-all route for 404 errors
});
