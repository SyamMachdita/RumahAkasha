<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\menuController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\baristaController;
use App\Http\Controllers\NonCoffeeController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\eventGuestController;

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
    Route::get('/event', [eventGuestController::class, 'showEvents']);
    Route::get('/event-about/{upcomingEvent}', [eventGuestController::class, 'show']);
    Route::post('/event-about/{id}', [eventGuestController::class, 'registrasi'])->name('register.event');
    Route::get('/event-about/{id}', [EventGuestController::class, 'show'])->name('event.about');
    Route::get('/profile', [BaristaController::class, 'about_us']);

    Route::get('/reservasi', function(){
        return view('customer.reserve');
    });
    Route::get('/menu', [menuController::class, 'get']);
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

    Route::get('/event/{id}/participants', [EventGuestController::class, 'viewEventParticipants'])->name('staff.event.participants');
    Route::post('/event/update-status', [EventGuestController::class, 'updateStatus'])->name('staff.event.updateStatus');


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


    ///// Menu
    // Coffee
    Route::get('/menu-coffee',[CoffeeController::class,'get'])->name('coffee.index');


    // ADD
    Route::get('/add-coffee', function(){
        return view('owner.formCoffee');
    });
    Route::post('/api/formCoffee',[CoffeeController::class,'store'])->name('store.coffee');

    // EDIT
    Route::get('/edit-coffee', [CoffeeController::class,'get'])->name('coffee.edit');
    Route::get('/api/editCoffe/{id_menu}',[CoffeeController::class,'edit'])->name('edit.coffee');
    Route::put('/api/editCoffee/{id_menu}',[CoffeeController::class,'update'])->name('update.coffee');
    // DELETE
    Route::delete('/api/delete-coffee/{id_menu}',[CoffeeController::class,'destroy'])->name('destroy.coffee');




    //NonCoffee
    // Get
    Route::get('/menu-noncoffee', [NonCoffeeController::class, 'get'])->name('noncoffee.index');

    // Add
    Route::get('/add-noncoffee', function(){
        return view('owner.formNoncoffee');
    });
    Route::post('/api/formNonCoffee', [NonCoffeeController::class, 'store'])->name('store.noncoffee');

    // Edit
    Route::get('/api/editNonCoffee/{id_menu}', [NonCoffeeController::class, 'edit'])->name('edit.noncoffee');
    Route::put('/api/editNonCoffee/{id_menu}', [NonCoffeeController::class, 'update'])->name('update.noncoffee');

    // Delete
    Route::delete('/api/delete-menu/{id_menu}', [NonCoffeeController::class, 'destroy'])->name('destroy.noncoffee');




    // Signature
    // Get
    Route::get('/menu-signature', [SignatureController::class, 'get'])->name('signature.index');

    // Add
    Route::get('/add-signature', function(){
        return view('owner.formSignature');
    });
    Route::post('/api/formSignature', [SignatureController::class, 'store'])->name('store.signature');


    // Edit
    Route::get('/edit-signature', [SignatureController::class, 'get'])->name('signature.index');
    Route::get('/api/editSignature/{id_menu}', [SignatureController::class, 'edit'])->name('edit.signature');
    Route::put('/api/editSignature/{id_menu}', [SignatureController::class, 'update'])->name('update.signature');

    // Delete
    Route::delete('/api/delete-signature/{id_menu}', [SignatureController::class, 'destroy'])->name('destroy.signature');



    //// Barista
    // Get
    Route::get('/barista', [BaristaController::class, 'get'])->name('baristas.index');

    // Add Barista
    Route::get('/add-barista', function(){
        return view('owner.formBarista');
    });
    Route::post('/api/create-barista', [BaristaController::class, 'store'])->name('store.barista');

    // Edit Barista
    Route::get('/edit-barista', function(){
        return view('owner.editBarista');
    });
    Route::get('/api/edit-barista/{id}', [BaristaController::class, 'edit'])->name('edit.barista');
    Route::put('/api/edit-barista/{id}', [BaristaController::class, 'update'])->name('update.barista');

    // Delete
    Route::delete('/api/delete-barista/{id_barista}', [BaristaController::class, 'destroy'])->name('destroy.barista');
});



// Function Owner & Staff | EVENT

Route::post('/api/create-event', [EventController::class, 'store'])->name('store.event');
// Edit Event sesuai index
Route::get('/api/edit-event/{id}', [EventController::class, 'edit'])->name('api-edit-event');
// Edit Event
Route::put('/api/edit-event/{id}', [EventController::class, 'update'])->name('update.event');
// Delete Event
Route::delete('/api/delete-event/{id}', [EventController::class, 'destroy'])->name('destroy.event');
