<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\FoodController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\midtransStatus;
=======
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
use App\Http\Controllers\SesiController;
use App\Http\Controllers\staffDashboard;
use App\Http\Controllers\EventController;
use App\Http\Controllers\baristaController;
<<<<<<< HEAD
use App\Http\Controllers\midtransController;
use App\Http\Controllers\NonCoffeeController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\eventGuestController;
use App\Http\Controllers\ownerDashboardController;
use App\Http\Controllers\ReservationInfoController;
=======
>>>>>>> parent of c7d7ae7 (registrasi_event_done)

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
<<<<<<< HEAD
    Route::get('/event', [eventGuestController::class, 'showEvents']);

    Route::get('/event-about/{upcomingEvent}', [eventGuestController::class, 'show'])->middleware(['auth', 'userAkses:customer,staff,owner']);

    Route::post('/event-about/{id}', [eventGuestController::class, 'registrasi'])->name('register.event');

    Route::get('/event-about/{id}', [EventGuestController::class, 'show'])->middleware(['auth', 'userAkses:customer,staff,owner'])->name('event.about');

    Route::get('/profile', [BaristaController::class, 'about_us']);

    Route::get('/reservasi/create', [ReservasiController::class, 'showReservationPage'])->middleware(['auth', 'userAkses:customer,staff,owner'])->name('reservasi.index');
    Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');

    Route::get('/menu', [menuController::class,'get']);
    Route::get('/reservasi/{reservation_id}/payment', [ReservasiController::class, 'showPaymentPage'])->name('payment.page');
});


=======
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

>>>>>>> parent of c7d7ae7 (registrasi_event_done)
//STAFF
Route::prefix('staff')->middleware(['auth', 'userAkses:staff'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [staffDashboard::class,'staff_dashboard']);

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

<<<<<<< HEAD
    Route::get('/event/{id}/participants', [EventGuestController::class, 'viewEventParticipants'])->name('staff.event.participants');
    Route::post('/event/update-status', [EventGuestController::class, 'updateStatus'])->name('staff.event.updateStatus');

=======
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
    // Reservation
    Route::get('/reservasi', [ReservationInfoController::class, 'info_staff']);

});


// OWNER
Route::prefix('owner')->middleware(['auth', 'userAkses:owner'])->group(function (){

    // Dashboard
    Route::get('/dashboard', [ownerDashboardController::class,'owner_dashboard']);

    // Barista
    Route::get('/reservasi', [ReservationInfoController::class, 'info_owner']);


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


<<<<<<< HEAD
    // Edit
    Route::get('/edit-signature', [SignatureController::class, 'get'])->name('signature.index');
    Route::get('/api/editSignature/{id_menu}', [SignatureController::class, 'edit'])->name('edit.signature');
    Route::put('/api/editSignature/{id_menu}', [SignatureController::class, 'update'])->name('update.signature');

    // Delete
    Route::delete('/api/delete-signature/{id_menu}', [SignatureController::class, 'destroy'])->name('destroy.signature');


    // Food
    Route::get('/menu-food',[FoodController::class,'get'])->name('food.index');


    // ADD
    Route::get('/add-food', function(){
        return view('owner.formFood');
    });
    Route::post('/api/formFood',[FoodController::class,'store'])->name('store.food');

    // EDIT
    Route::get('/edit-food', [FoodController::class,'get'])->name('food.edit');
    Route::get('/api/editFood/{id_menu}',[FoodController::class,'edit'])->name('edit.food');
    Route::put('/api/editFoode/{id_menu}',[FoodController::class,'update'])->name('update.food');
    // DELETE
    Route::delete('/api/delete-food/{id_menu}',[FoodController::class,'destroy'])->name('destroy.food');


    //// Barista
    // Get
    Route::get('/barista', [BaristaController::class, 'get'])->name('baristas.index');

    // Add Barista
=======
    // Barista
    Route::get('/barista', function(){
        return view('owner.barista');
    });
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
    Route::get('/add-barista', function(){
        return view('owner.formBarista');
    });
    Route::get('/edit-barista', function(){
        return view('owner.editBarista');
    });
<<<<<<< HEAD
    Route::get('/api/edit-barista/{id}', [BaristaController::class, 'edit'])->name('edit.barista');
    Route::put('/api/edit-barista/{id}', [BaristaController::class, 'update'])->name('update.barista');

    // Delete
    Route::delete('/api/delete-barista/{id_barista}', [BaristaController::class, 'destroy'])->name('destroy.barista');

    // Informations
    Route::get('/information',[ownerDashboardController::class,'owner_information']);
=======
>>>>>>> parent of c7d7ae7 (registrasi_event_done)
});



// Function Owner & Staff

Route::post('/api/create-event', [EventController::class, 'store'])->name('store');
// Edit Event sesuai index
Route::get('/api/edit-event/{id}', [EventController::class, 'edit'])->name('api-edit-event');
// Edit Event
Route::put('/api/edit-event/{id}', [EventController::class, 'update'])->name('update');
// Delete Event
Route::delete('/api/delete-event/{id}', [EventController::class, 'destroy'])->name('destroy');
