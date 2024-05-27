<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Barista;
use Illuminate\Http\Request;

class BaristaController extends Controller
{
    public function store(Request $request)
    {
        $client = new Client();

        $response = $client->post('http://localhost:8080/api/create-barista', [
            'multipart' => [
                [
                    'name'     => 'nama_barista',
                    'contents' => $request->nama_barista
                ],
                [
                    'name'     => 'deskripsi',
                    'contents' => $request->deskripsi
                ],
                [
                    'name'     => 'tahun_kerja',
                    'contents' => $request->tahun_kerja
                ],
                [
                    'name'     => 'job_desk',
                    'contents' => $request->job_desk
                ],
                [
                    'name'     => 'foto_barista',
                    'contents' => fopen($request->file('foto_barista')->getPathname(), 'r'),
                    'filename' => $request->file('foto_barista')->getClientOriginalName()
                ],
            ]
        ]);

        return redirect()->route('baristas.index');
    }

    public function get()
    {
        $baristas = Barista::all();
        return view('owner.barista', compact('baristas'));
    }

    public function about_us()
    {
        $barista = Barista::all();
        return view('customer.profile', compact('barista'));
    }

    public function edit($id_barista)
    {
        $barista = Barista::findOrFail($id_barista);
        return view('owner.editBarista', compact('barista'));
    }

    public function update(Request $request, $id_barista)
    {
        $request->validate([
            'nama_barista' => 'required',
            'deskripsi' => 'required',
            'tahun_kerja' => 'required',
            'job_desk' => 'required',
            'foto_barista' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $barista = Barista::find($id_barista);

        if (!$barista) {
            return response()->json(['message' => 'Barista not found'], 404);
        }

        $barista->nama_barista = $request->nama_barista;
        $barista->deskripsi = $request->deskripsi;
        $barista->tahun_kerja = $request->tahun_kerja;
        $barista->job_desk = $request->job_desk;

        if ($request->hasFile('foto_barista')) {
            $image = $request->file('foto_barista');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('img/barista'), $imageName);
            $barista->foto_barista = 'img/barista/' . $imageName;
        }

        $barista->save();

        return redirect()->route('baristas.index');
    }

    public function destroy($id)
    {
        $barista = Barista::findOrFail($id);
        $barista->delete();

        return redirect()->route('baristas.index');
    }
}
