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

}
