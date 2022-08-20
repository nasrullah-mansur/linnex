<?php

use App\Http\Controllers\Admin\AppearanceController;
use App\Http\Controllers\Admin\FacebookController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\MainMenuController;
use App\Http\Controllers\Admin\PasswordController;
use App\Http\Controllers\Admin\PhoneController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\TopBarController;
use App\Http\Controllers\CustomCodeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ThemeController;
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

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// ================ Dashboard ======================
Route::middleware(['auth'])->group(function() {
    Route::prefix('admin')->group(function() {

        // Top bar;
        Route::get('top-bar', [TopBarController::class, 'index'])->name('admin.top.index');
        Route::post('top-bar', [TopBarController::class, 'update'])->name('admin.top.update');

        // Main Menu;
        Route::get('main-menu', [MainMenuController::class, 'index'])->name('admin.mainMenu');
        Route::post('main-menu', [MainMenuController::class, 'update'])->name('admin.mainMenu.update');

        // Social;
        Route::get('social', [SocialController::class, 'index'])->name('admin.social');
        Route::post('social', [SocialController::class, 'update'])->name('admin.social.update');

        // Slider;
        Route::get('slider/all', [SliderController::class, 'index'])->name('admin.slider.index');
        Route::get('slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
        Route::post('slider/store', [SliderController::class, 'store'])->name('admin.slider.store');
        Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit');
        Route::post('slider/update/{id}', [SliderController::class, 'update'])->name('admin.slider.update');
        Route::get('slider/delete/{id}', [SliderController::class, 'delete'])->name('admin.slider.delete');

        // Phone;
        Route::get('phone/all', [PhoneController::class, 'index'])->name('admin.phone.index');
        Route::get('phone/create', [PhoneController::class, 'create'])->name('admin.phone.create');
        Route::post('phone/store', [PhoneController::class, 'store'])->name('admin.phone.store');
        Route::get('phone/edit/{id}', [PhoneController::class, 'edit'])->name('admin.phone.edit');
        Route::post('phone/update/{id}', [PhoneController::class, 'update'])->name('admin.phone.update');
        Route::get('phone/delete/{id}', [PhoneController::class, 'delete'])->name('admin.phone.delete');

        // Facebook;
        Route::get('facebook', [FacebookController::class, 'index'])->name('facebook.index');
        Route::post('facebook', [FacebookController::class, 'update'])->name('facebook.update');

        // Facility;
        Route::get('facility/all', [FacilityController::class, 'index'])->name('facility.index');
        Route::get('facility/create', [FacilityController::class, 'create'])->name('facility.create');
        Route::post('facility/store', [FacilityController::class, 'store'])->name('facility.store');
        Route::get('facility/edit/{id}', [FacilityController::class, 'edit'])->name('facility.edit');
        Route::post('facility/update/{id}', [FacilityController::class, 'update'])->name('facility.update');
        Route::get('facility/delete/{id}', [FacilityController::class, 'delete'])->name('facility.delete');

        // Footer;
        Route::get('footer', [FooterController::class, 'index'])->name('admin.footer');
        Route::post('footer', [FooterController::class, 'update'])->name('admin.footer.update');

        // Appearance;
        Route::get('appearance', [AppearanceController::class, 'index'])->name('admin.appearance');
        Route::post('appearance', [AppearanceController::class, 'update'])->name('admin.appearance.update');

        // Password;
        Route::get('/my-account', [PasswordController::class, 'index'])->name('admin.password');
        Route::post('/my-account/profile', [PasswordController::class, 'profile'])->name('admin.profile.update');
        Route::post('/my-account/password', [PasswordController::class, 'password'])->name('admin.password.update');

        // Theme;
        Route::get('/theme', [ThemeController::class, 'index'])->name('admin.theme');
        Route::post('/theme', [ThemeController::class, 'update'])->name('admin.theme.update');

        // Custom Code;
        Route::get('/custom-code', [CustomCodeController::class, 'index'])->name('admin.custom.code');
        Route::post('/custom-code', [CustomCodeController::class, 'update'])->name('admin.custom.code.update');
    });
});
