<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\ModelOrName;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Items\ItemRequest;
use App\Http\Requests\Items\ItemUpdateRequest;

class ItemController extends Controller
{
    // zwraca wszystkich przedmiotów
    public function index() {
        // dd(Item::with('manufacturer', 'modelorname', 'category')->get());
        return view(
            'items.index', // nazwa szablony
            [
                'items' => Item::with('manufacturer', 'modelorname', 'category')->withTrashed()->withCount('users')->get()
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

     // wyswietlajaca formularz
     public function edit(Request $request, Item $item) {
        $isEdit = true;

        $manufacturers = Manufacturer::orderBy('name')->get();
        $modelornames = ModelOrName::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();

        return view(
            'items.create', 
            compact( 'isEdit', 'item', 'manufacturers', 'modelornames', 'categories' )
        );
    }

    // wysylajace dane do bazy
    public function update(ItemUpdateRequest $request, Item $item) {

        $item->fill(
            $request->all()
        )->save();

        return redirect()->route('items.index')->with(
            'success', 
            // sprawdzamy, czy zostaly zmienione jakies dane, by wysswietlic prawdilowy komunikat
            __( $item->wasChanged()? 'translations.items.toasts.success.updated' : 'translations.items.toasts.success.nothing-changed', [ 
                'manufacturer' => $item->manufacturer->name,
                'model_or_name' => $item->modelorname->name,
                'category' => $item->category->name
            ])
        );
    }

    public function destroy(Item $item) {
        //usuniecie przedmiotu, powoduje usuniecie rekordow, ktorze dotyczyly tego przedmiotu w tabeli 'item_user"
        $item->users()->detach();
        $item->delete();

        // usuniecie przedmiotu, powoduje softDelete rekordow, ktore dotyczyly tego przedmiotu w tabeli 'item_user':
        // $item->delete();

        return redirect()->route('items.index')->with( 'success', __('translations.items.toasts.success.destroy', [
            'manufacturer' => $item->manufacturer->name,
            'model_or_name' => $item->modelorname->name,
            'category' => $item->category->name
        ]));
    }

    public function restore(int $id) {
        $item = Item::onlyTrashed()->findOrFail($id);
        $item->restore();

        return redirect()->route('items.index')->with( 'success', __('translations.items.toasts.success.restore', [
            'manufacturer' => $item->manufacturer->name,
            'model_or_name' => $item->modelorname->name,
            'category' => $item->category->name
        ]));

    }
}
