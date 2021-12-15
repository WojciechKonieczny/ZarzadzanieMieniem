<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Categories\CategoryRequest;

class CategoryController extends Controller
{
    
    // zwraca wszystkie kategorie
    public function index() {
        return view(
            'categories.index', // nazwa szablony
            [
                'categories' => Category::withTrashed()->withCount('items')->get()
            ]
        );
    }

    // metoda generujaca widok formularza
    public function create() {
        return view(
            'categories.create'
        );
    }

    // metoda dodajaca rekord do bazy
    public function store(CategoryRequest $request) {
        $category = Category::create (
            $request->merge([
                'created_by' => Auth::id()
            ])->all()
        );

        return redirect()->route('categories.index')->with( 'success', __('translations.categories.toasts.success.stored', [
            'name' => $category->name
        ]));
    }

    // wyswietlajaca formularz
    public function edit(Category $category) {
        $isEdit = true;

        return view(
            'categories.create',
            compact( 'category', ['isEdit'] )
        );
    }

    // wysylajace dane do bazy
    public function update(CategoryRequest $request, Category $category) {
        $category->fill(
            $request->merge([
                'created_by' => Auth::id()
            ])->all()
        )->save();

        return redirect()->route('categories.index')->with(
            'success', 
            // sprawdzamy, czy zostaly zmienione jakies dane, by wysswietlic prawdilowy komunikat
            __( $category->wasChanged()? 'translations.categories.toasts.success.updated' : 'translations.categories.toasts.success.nothing-changed', [ 
                'name' => $category->name 
            ])
        );
    }

    public function destroy(Category $category) {
        $category->delete();

        return redirect()->route('categories.index')->with( 'success', __('translations.categories.toasts.success.destroy', [
            'name' => $category->name
        ]));
    }

    public function restore(int $id) {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();

        return redirect()->route('categories.index')->with( 'success', __('translations.categories.toasts.success.restore', [
            'name' => $category->name
        ]));

    }

}
