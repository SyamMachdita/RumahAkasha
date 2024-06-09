<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\registrasiEvent;

class EventGuestController extends Controller
{
    public function showEvents()
    {
        $upcomingEvent = Event::where('status', 'in_progress')->first();
        $previousEvents = Event::where('status', 'done')->orderBy('id', 'desc')->get();

        return view('customer.event', compact('upcomingEvent', 'previousEvents'));
    }

    public function show($id)
    {
    $event = Event::findOrFail($id);
    $user = User::all();

    $isRegistered = false;
    $registrasiEventdata = null;
    if (auth()->check()) {
        $registrasiEventdata = registrasiEvent::where('id_event', $id)
                            ->where('id_customer', auth()->user()->id)
                            ->first();
        if ($registrasiEventdata) {
            $isRegistered = true;
        }
    }

    return view('customer.event-about', compact('event', 'user', 'isRegistered', 'registrasiEventdata'));
    }

    public function registrasi(Request $request)
    {
        $request->validate([
            'id_event' => 'required|exists:events,id',
            'id_customer' => 'required|exists:users,id',
        ]);


        $existingRegistration = registrasiEvent::where('id_event', $request->id_event)
                                              ->where('id_customer', $request->id_customer)
                                              ->first();

        if ($existingRegistration) {
            return redirect()->back()->with('error', 'You have already registered for this event!');
        }


        $registration = new registrasiEvent();
        $registration->id_event = $request->id_event;
        $registration->id_customer = $request->id_customer;
        $registration->save();

        return redirect()->back()->with('success', 'You have successfully registered for the event!');
    }

    public function viewEventParticipants($id)
    {
    $event = Event::findOrFail($id);
    $registrations = registrasiEvent::where('id_event', $id)
                        ->where(function($query) {
                            $query->where('status', '!=', 'checked')
                                  ->orWhereNull('status');
                        })
                        ->with('customer')
                        ->get();

    return view('staff.checklist', compact('event', 'registrations'));
    }

    public function updateStatus(Request $request)
    {
    foreach ($request->status as $registrationId => $status) {
        registrasiEvent::where('id_registrasievent', $registrationId)->update(['status' => $status]);
    }

    return redirect()->route('staff.event.participants', ['id' => $request->event_id])->with('success', 'Status updated successfully');
    }
}
