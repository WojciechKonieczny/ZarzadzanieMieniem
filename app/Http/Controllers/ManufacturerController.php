<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    
    // zwraca wszystkich Producentów
    public function index() {
        return view(
            'manufacturers.index', // nazwa szablony
            [
                'manufacturers' => Manufacturer::withTrashed()->withCount('items')->get()
            ]
        );
    }

}
