<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\FacebookController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CalculationsController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\Auth\GoogleController; // Import GoogleController


// Route for the landing page
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

// Rute untuk Sign In
Route::get('/signIn', [AuthController::class, 'index'])->name('signIn');
Route::post('/signIn', [AuthController::class, 'authenticate'])->name('signin.auth');

Route::get('login/facebook', [FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('login/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

// Rute untuk login Google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

// Rute untuk Sign Up
Route::get('/signUp', [SignUpController::class, 'index'])->name('signUp');
Route::post('/signUp', [SignUpController::class, 'store'])->name('signUp.store');

// Grup rute dengan prefix 'topsis' dan middleware 'auth'
Route::group(['prefix' => 'topsis', 'middleware' => ['auth','verified']], function() {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Criteria
    Route::prefix('criteria')->group(function () {
        Route::get('/', [CriteriaController::class, 'index'])->name('criteria');
        Route::post('/store', [CriteriaController::class, 'store'])->name('criteria.store');
        Route::put('/update', [CriteriaController::class, 'update'])->name('criteria.update');
        Route::delete('/destroy', [CriteriaController::class, 'delete'])->name('criteria.destroy');
        Route::get('/export/excel', [CriteriaController::class, 'exportExcel'])->name('criteria.export.excel');
        Route::get('/template', [CriteriaController::class, 'getCriteriaTemplate'])->name('template.criteria');
        Route::post('/template', [CriteriaController::class, 'importCriteria'])->name('template.criteria.import');
    });

    // Alternatives
    Route::prefix('alternatives')->group(function () {
        Route::get('/', [AlternativeController::class, 'index'])->name('alternatives');
        Route::post('/store', [AlternativeController::class, 'store'])->name('alternative.store');
        Route::put('/update', [AlternativeController::class, 'update'])->name('alternative.update');
        Route::delete('/destroy', [AlternativeController::class, 'delete'])->name('alternative.destroy');
    });

    // Grades
    Route::prefix('grades')->group(function () {
        Route::get('/', [GradeController::class, 'index'])->name('grades');
        Route::get('/getForms', [GradeController::class, 'getForms'])->name('grades.getForms');
        Route::put('/update', [GradeController::class, 'update'])->name('grades.update');
    });

    // Calculations
    Route::get('/calculations', [CalculationsController::class, 'index'])->name('calculations');

    // Results
    Route::get('/results', [ResultController::class, 'index'])->name('results');

    // Logout
    Route::get('logout', [AuthController::class, 'logout'])->name('landing.logout');
});

/// Verifikasi Email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Link verifikasi telah dikirim!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// Rute Reset dan Lupa Password
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


// Rute untuk halaman profil
Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');



Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('sendMessage');

// Rute untuk menangani semua permintaan lainnya
Route::any('/{any}', function () {
    if (auth()->user()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('signIn');
})->where('any', '.*');