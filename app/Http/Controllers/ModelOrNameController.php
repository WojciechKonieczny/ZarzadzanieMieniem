<?php

namespace App\Http\Controllers;

use App\Models\ModelOrName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ModelsOrNames\ModelOrNameRequest;

class ModelOrNameController extends Controller
{

    public function index() {
        return view(
            'models_or_names.index',
            [
                'models' => ModelOrName::withTrashed()->withCount('items')->get()
            ],
        );
    }

    // metoda generujaca widok
    public function create() {
        return view(
            'models_or_names.create'
        );
    }

    // metoda do dodawania rekordow do bazy
    public function store(ModelOrNameRequest $request) {
        // jesli w modelu w $fillable nazwy zgadzaja sie z nazwami pol formularza, to moge uzyc $request->all()
        $model_or_name = ModelOrName::create(
            $request->merge([
                'created_by' => Auth::id()
            ])->all()
        );

        return redirect()->route('models.index')->with( 'success', __('translations.models_or_names.toasts.success.stored', [
            'name' => $model_or_name->name
        ]));
    }

    // wyswietlajaca formularz
    public function edit(ModelOrName $model_or_name) {
        $isEdit = true;

        return view(
            'models_or_names.create',
            compact( 'model_or_name', ['isEdit'] )
        );
    }

    // wysylajace dane do bazy
    public function update(ModelOrNameRequest $request, ModelOrName $model_or_name) {
        $model_or_name->fill(
            $request->merge([
                'created_by' => Auth::id()
            ])->all()
        )->save();

        return redirect()->route('models.index')->with(
            'success', 
            // sprawdzamy, czy zostaly zmienione jakies dane, by wysswietlic prawdilowy komunikat
            __( $model_or_name->wasChanged()? 'translations.models_or_names.toasts.success.updated' : 'translations.models_or_names.toasts.success.nothing-changed', [ 
                'name' => $model_or_name->name 
            ])
        );
    }

}
