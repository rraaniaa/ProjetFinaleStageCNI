<?php



use App\Http\Controllers\Auth\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    EntrepriseController, // Add this import
};

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
// routes/web.php
// routes/web.php





Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.forgot-password'); // Updated route name

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.send-reset-link'); // Updated route name




use App\Http\Controllers\CycleController; // Import the CycleController

Route::get('/cycles/new', [CycleController::class, 'new'])->name('cycles.new'); // Assumption for displaying the form

Route::get('/cycle/create', [CycleController::class, 'create'])->name('admin.create-cycle'); // Display form for creating cycle
Route::post('/cycle', [CycleController::class, 'store'])->name('admin.store-cycle'); // Store the new cycle
Route::get('/cycles', [CycleController::class, 'index'])->name('cycles.index'); // List all cycles
Route::delete('/cycles/{id}', [CycleController::class, 'destroy'])->name('cycles.destroy');
Route::get('/cycle/{id}/edit', [CycleController::class, 'edit'])->name('admin.edit-cycle'); // Display form for editing cycle

Route::put('/cycle/{id}', [CycleController::class, 'update'])->name('admin.update-cycle');











Route::get('/admin/create', function () {
    // Your logic here
})->name('admin.create');


// ... Other route definitions ...

Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function () {
        // ... Other admin routes ...

        // Add the following route definitions inside the group
        Route::get('/entreprise/create', [EntrepriseController::class, 'create'])->name('entreprise.create');
        Route::post('/entreprise', [EntrepriseController::class, 'store'])->name('entreprise.store');
    });

// ... Other route definitions ...
// routes/web.php


Route::delete('/users/{id}', 'UserController@deleteUser')->name('users.delete');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
//Route::get('/admin/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';





use App\Models\Cycle; // Import the appropriate Cycle model

Route::get('/admin/dashboard', function () {
    $cycles = Cycle::all(); // Assuming you want to fetch all cycles from the database
    return view('dashboard', ['cycles' => $cycles]);
})->middleware(['auth'])->name('admin.dashboard');




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
        Route::get('/entreprise/create', [EntrepriseController::class, 'create'])->name('entreprise.create');
});
