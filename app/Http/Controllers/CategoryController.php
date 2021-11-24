<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

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

}
