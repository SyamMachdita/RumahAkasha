<?php

namespace App\Http\Controllers;

use App\Models\Event;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $client = new Client();

        $response = $client->post('http://localhost:8080/api/create-event', [
            'multipart' => [
                [
                    'name'     => 'title',
                    'contents' => $request->title
                ],
                [
                    'name'     => 'date',
                    'contents' => $request->date
                ],
                [
                    'name'     => 'time',
                    'contents' => $request->time
                ],
                [
                    'name'     => 'description',
                    'contents' => $request->description
                ],
                [
                    'name'     => 'fee',
                    'contents' => $request->fee
                ],
                [
                    'name'     => 'status',
                    'contents' => $request->status
                ],
                [
                    'name'     => 'image',
                    'contents' => fopen($request->file('image')->getPathname(), 'r'),
                    'filename' => $request->file('image')->getClientOriginalName()
                ],
            ]


        ]);

        // return $response->getBody()->getContents();
        return redirect()->route(Auth::user()->role . '.event');
    }

    public function get()
    {
        $events = Event::all();

        // Mendapatkan peran pengguna yang saat ini login
        $userRole = Auth::user()->role;

        // Mengarahkan pengguna ke tampilan yang sesuai dengan peran mereka
        if ($userRole === 'staff') {
            return view('staff.event', compact('events'));
        } elseif ($userRole === 'owner') {
            return view('owner.event', compact('events'));
        }
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $userRole = Auth::user()->role;

        if ($userRole === 'staff') {
            return view('staff.edit-event', compact('event'));
        } elseif ($userRole === 'owner') {
            return view('owner.editEvent', compact('event'));
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'description' => 'required',
            'fee' => 'required|numeric',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $event = Event::find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->title = $request->title;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->description = $request->description;
        $event->fee = $request->fee;
        $event->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $event->image = 'img/event/' . $imageName;
        }

        $event->save();

        return redirect()->route(Auth::user()->role . '.event');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        // return response()->json(['message' => 'Event deleted successfully']);
        return redirect()->route(Auth::user()->role . '.event');
    }

}
