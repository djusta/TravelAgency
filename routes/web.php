<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LandingPageController;
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
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::redirect('/', '/admin/dashboard', );
    Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');
    Route::resource('destinations', DestinationController::class);
    Route::resource('packages', PackageController::class);
    Route::resource('leads', LeadController::class);
    Route::resource('landing-pages', LandingPageController::class);
    Route::fallback(function() {
        return "Not Found";
    }); // Catch-all route for 404 errors
});

/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
*/
Route::controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact-us', 'contactUs')->name('contact');
    Route::get('/destinations/{slug}', 'destination')->name('destination');
    Route::get('/package/{slug}', 'package')->name('package');
    Route::post('/lead', 'storeLead')->name('storeLead');
    Route::fallback('notFound'); // Catch-all route for 404 errors
});

/*
|--------------------------------------------------------------------------
| Landing Page Routes
|--------------------------------------------------------------------------
*/
Route::get('/tourism/{slug}', [LandingPageController::class, 'endUserShow'])->name('landingPage');
Route::post('/landing-page/store-lead', [LandingPageController::class, 'storeLead'])->name('landingPage.storeLead');