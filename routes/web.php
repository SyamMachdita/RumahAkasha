<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\baristaController;

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

Route::get('/', function () {
    return view('welcome');
});


// User Auth
Route::middleware(['guest'])->group(function () {
    Route::get('/login',[SesiController::class, 'index'])->name('login');
    Route::post('/login',[SesiController::class, 'login']);
    Route::get('/register',[SesiController::class, 'register']);
    Route::post('/create',[SesiController::class, 'create'])->name('create');
});

Route::get('/logout', [SesiController::class, 'logout'])->name('logout');


// Customer
Route::prefix('')->group(function () {
    Route::get('/home', function(){
        return view('customer.index');
    });
    Route::get('/event', function(){
        return view('customer.event');
    });
    Route::get('/event-about', function(){
        return view('customer.event-about');
    });
    Route::get('/profile', function(){
        return view('customer.profile');
    });
    Route::get('/reservasi', function(){
        return view('customer.reserve');
    });
    Route::get('/menu', function(){
        return view('customer.menu');
    });
});


// ->middleware(['auth', 'userAkses:customer,staff,owner'])

//STAFF
Route::prefix('staff')->middleware(['auth', 'userAkses:staff'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function(){
        return view('staff.dashboard');
    });

    // Event
    // w/ data
    Route::get('/event', [EventController::class, 'get'])->name('staff.event');

    Route::get('/create-event', function(){
        return view('staff.create-event');
    });
    Route::get('/edit-event', function(){
        return view('staff.edit-event');
    });
    Route::get('/checklist-event', function(){
        return view('staff.checklist');
    });

    // Reservation
    Route::get('/reservasi', function(){
        return view('staff.reservasi');
    });

});


// OWNER
Route::prefix('owner')->middleware(['auth', 'userAkses:owner'])->group(function (){

    // Dashboard
    Route::get('/dashboard',function(){
        return view('owner.homepage');
    });

    // Barista
    Route::get('/reservasi', function(){
        return view('owner.reservasi');
    });


    // Event
    Route::get('/event', [EventController::class, 'get'])->name('owner.event');

    Route::get('/create-event', function(){
        return view('owner.formEvent');
    });

    Route::get('/edit-event', function(){
        return view('owner.editEvent');
    })->name('owner.edit-event');


    // Menu
    Route::get('/menu-coffee', function(){
        return view('owner.coffee');
    });
    Route::get('/add-coffee', function(){
        return view('owner.formCoffee');
    });
    Route::get('/edit-coffee', function(){
        return view('owner.editCoffee');
    });


    Route::get('/menu-noncoffee', function(){
        return view('owner.noncoffee');
    });
    Route::get('/add-noncoffee', function(){
        return view('owner.formNoncoffee');
    });
    Route::get('/edit-noncoffee', function(){
        return view('owner.editNonCoffee');
    });


    Route::get('/menu-signature', function(){
        return view('owner.signature');
    });
    Route::get('/add-signature', function(){
        return view('owner.formSignature');
    });
    Route::get('/edit-signature', function(){
        return view('owner.editSignature');
    });


    // Barista
    Route::get('/barista', function(){
        return view('owner.barista');
    });
    Route::get('/add-barista', function(){
        return view('owner.formBarista');
    });
    Route::get('/edit-barista', function(){
        return view('owner.editBarista');
    });
});



// Function Owner & Staff

Route::post('/api/create-event', [EventController::class, 'store'])->name('store');
// Edit Event sesuai index
Route::get('/api/edit-event/{id}', [EventController::class, 'edit'])->name('api-edit-event');
// Edit Event
Route::put('/api/edit-event/{id}', [EventController::class, 'update'])->name('update');
// Delete Event
Route::delete('/api/delete-event/{id}', [EventController::class, 'destroy'])->name('destroy');
