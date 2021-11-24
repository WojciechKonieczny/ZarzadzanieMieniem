<?php

namespace App\Http\Controllers;

use App\Models\ModelOrName;
use Illuminate\Http\Request;

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

}
