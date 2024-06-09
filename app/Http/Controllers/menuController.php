<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class menuController extends Controller
{
    public function get()
    {
        $menu_coffee = Menu::where('kategori', 'coffee')->get();
        $menu_noncoffee = Menu::where('kategori', 'noncoffee')->get();
        $menu_signature = Menu::where('kategori', 'signature')->get();
        $menu_food = Menu::where('kategori', 'food')->get();


        $bestSeller = Pesanan::select('id_menu', DB::raw('SUM(jumlah_menu) as total'))
        ->groupBy('id_menu')
        ->orderByDesc('total')
        ->take(3) // Ambil 3 menu teratas
        ->get();

        // Mengambil detail masing-masing menu
        $bestSellerMenus = [];
        foreach ($bestSeller as $item) {
            $menu = Menu::find($item->id_menu);
            if ($menu) {
                $menu->total_pesanan = $item->total;
                $bestSellerMenus[] = $menu;
            }
        }

        return view('customer.menu', [
            'menu_coffee' => $menu_coffee,
            'menu_noncoffee' => $menu_noncoffee,
            'menu_signature' => $menu_signature,
            'menu_food' => $menu_food,
            'bestSellerMenus' => $bestSellerMenus,
        ]);

    }
}
