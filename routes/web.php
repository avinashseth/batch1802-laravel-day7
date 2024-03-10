<?php

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

use App\Http\Controllers\BladeExamplesController;

Route::get('sending-data', [BladeExamplesController::class, 'sendingData']);

Route::get('js-framework', [BladeExamplesController::class, 'jsFramework']);

Route::get('convert-to-json', [BladeExamplesController::class, 'convertToJson']);

Route::get('if-statement', [BladeExamplesController::class, 'ifStatement']);

Route::get('unless', [BladeExamplesController::class, 'unlessStatement']);

Route::get('app-stage', [BladeExamplesController::class, 'appStage']);

Route::view('loops', 'loops');

use App\Models\User;

Route::get('users', function() {

    $users = User::all();

    return view('users')
        ->with('users', $users);

});




















use App\Http\Controllers\MySessionController;

Route::get('create-session', [MySessionController::class, 'getCreateSession']);
Route::get('get-session', [MySessionController::class, 'getSessionValue']);
Route::get('delete-session', [MySessionController::class, 'getDeleteSession']);










































use App\Mail\NewRegistrationMail;

Route::get('demo', function() {

    $user = User::where('id', 6)->first();

    Mail::to($user->email)->send(new NewRegistrationMail($user));

});

Route::get('lang-demo', function() {

    return view('lang-demo');

})->name('say-hi');

use App\Http\Controllers\LanguageSwitchController;

Route::get('set-language/{language}',[LanguageSwitchController::class, 'changeLanguage'])->name('language-switch');
