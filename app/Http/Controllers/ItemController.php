<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // zwraca wszystkich przedmiotów
    public function index() {
        // dd(Item::with('manufacturer', 'modelorname', 'category')->get());
        return view(
            'items.index', // nazwa szablony
            [
                'items' => Item::with('manufacturer', 'modelorname', 'category')->get()
            ]
        );
    }
}
