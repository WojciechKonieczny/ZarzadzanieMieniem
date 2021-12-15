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

    // wyswietlajaca formularz
    public function edit(Manufacturer $manufacturer) {
        $isEdit = true;

        return view(
            'manufacturers.create',
            compact( 'manufacturer', ['isEdit'] )
        );
    }

    // wysylajace dane do bazy
    public function update(ManufacturerRequest $request, Manufacturer $manufacturer) {
        $manufacturer->fill(
            $request->merge([
                'created_by' => Auth::id()
            ])->all()
        )->save();

        return redirect()->route('manufacturers.index')->with(
            'success', 
            // sprawdzamy, czy zostaly zmienione jakies dane, by wysswietlic prawdilowy komunikat
            __( $manufacturer->wasChanged()? 'translations.manufacturers.toasts.success.updated' : 'translations.manufacturers.toasts.success.nothing-changed', [ 
                'name' => $manufacturer->name 
            ])
        );
    }

    public function destroy(Manufacturer $manufacturer) {
        $manufacturer->delete();

        return redirect()->route('manufacturers.index')->with( 'success', __('translations.manufacturers.toasts.success.destroy', [
            'name' => $manufacturer->name
        ]));
    }

    public function restore(int $id) {
        $manufacturer = Manufacturer::onlyTrashed()->findOrFail($id);
        $manufacturer->restore();

        return redirect()->route('manufacturers.index')->with( 'success', __('translations.manufacturers.toasts.success.restore', [
            'name' => $manufacturer->name
        ]));

    }

}
