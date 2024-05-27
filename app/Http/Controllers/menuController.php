<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
    public function get()
    {
        $menu_coffee = Menu::where('kategori', 'coffee')->get();
        $menu_noncoffee = Menu::where('kategori', 'noncoffee')->get();
        $menu_signature = Menu::where('kategori', 'signature')->get();

        return view('customer.menu', [
            'menu_coffee' => $menu_coffee,
            'menu_noncoffee' => $menu_noncoffee,
            'menu_signature' => $menu_signature,
        ]);
    }
}
