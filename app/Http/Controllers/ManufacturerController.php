<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Manufacturers\ManufacturerRequest;

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

    // metoda generujaca widok
    public function create() {
        return view(
            'manufacturers.create'
        );
    }

    // metoda do dodawania rekordow do bazy
    public function store(ManufacturerRequest $request) {
        // jesli w modelu w $fillable nazwy zgadzaja sie z nazwami pol formularza, to moge uzyc $request->all()
        $manufacturer = Manufacturer::create(
            $request->merge([
                'created_by' => Auth::id()
            ])->all()
        );

        return redirect()->route('manufacturers.index')->with( 'success', __('translations.manufacturers.toasts.success.stored', [
            'name' => $manufacturer->name
        ]));
    }

}
