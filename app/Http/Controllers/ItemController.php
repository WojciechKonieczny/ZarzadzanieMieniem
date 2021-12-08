<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\ModelOrName;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Items\ItemRequest;

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

    public function create() {
        return view(
            'items.create', [ 
                'manufacturers' => Manufacturer::orderBy('name')->get(),
                'modelornames' => ModelOrName::orderBy('name')->get(),
                'categories' => Category::orderBy('name')->get()
            ]
        );
    }

    public function store( ItemRequest $request ) {

        // tworzymy przedmiot, ktory zostanie wypelniony danymi z formularza
        $item = Item::create(
            $request->all()
        );

        $manufacturer = $request->input('manufacturer_id', null);
        $model_or_name = $request->input('model_or_name_id', null);
        $category = $request->input('category_id', null);
        
        // // synchronizuje nam tego producenta, ktory przesylany jest z formularza z tymi, co sa w bazie; gdy sa po stronie formmularza i bazy - nic nie zmieniaj
        // $item->manufacturer()->sync( $manufacturer );
        // $item->model_or_name()->sync( $model_or_name );
        // $item->category()->sync( $category );

        return redirect()->route('items.index')->with('success', __('translations.items.toasts.success.stored', [
            'manufacturer' => $item->manufacturer->name,
            'model_or_name' => $item->modelorname->name,
            'category' => $item->category->name
        ]));

    }
}
