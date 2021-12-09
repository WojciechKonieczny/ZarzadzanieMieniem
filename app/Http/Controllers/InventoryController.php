<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\Category;
use App\Models\ModelOrName;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Inventories\InventoryRequest;

class InventoryController extends Controller
{
    public function index() {

        // dd( Item::with('manufacturer', 'modelorname', 'category')->get() );

        return view(
            'inventory.index', // nazwa szablony
            [
                'items' => Item::with('manufacturer', 'modelorname', 'category', 'users')->get()

                // 'items' => DB::table('item_user')
                //             ->join('items', 'item_user.item_id', 'items.id')
                //             ->join('users', 'item_user.user_id', 'users.id')
                //             ->join('categories', 'items.category_id', 'categories.id')
                //             ->join('manufacturers', 'items.manufacturer_id', 'manufacturers.id')
                //             ->join('model_or_names', 'items.model_or_name_id', 'model_or_names.id')
                //             ->select('item_user.id', 'item_user.created_at', 'item_user.updated_at', 'item_user.deleted_at', 'manufacturers.name AS manufacturer', 'model_or_names.name AS model', 'categories.name AS category', 'item_user.serial_number', 'item_user.purcharse_date', 'item_user.warranty_end', 'item_user.assignment_date', 'users.email')
                //             ->get()
            ]
        );
    }

    public function create() {
        return view(
            'inventory.create', [ 
                'items' => Item::orderBy('category_id')->with('manufacturer', 'modelorname', 'category', 'users')->get(),
                'users' => User::orderBy('name')->with('items')->get()
            ]
        );
    }

    public function store( InventoryRequest $request ) {
        // szukam przedmiotu o podanym id
        $item = Item::find($request->item_id);
        $user = User::find($request->user_id);
        
        // dodaję do tabeli pivot 
        $item->users()->attach( $request->user_id, [ 
            'serial_number' => $request->serial_number, 
            'purcharse_date' => $request->purcharse_date,
            'warranty_end' => $request->warranty_end,
            'assignment_date' => $request->assignment_date
        ]);
        
        return redirect()->route('inventory.index')->with('success', __('translations.inventory.toasts.success.stored', [
            'manufacturer' => $item->manufacturer->name,
            'model_or_name' => $item->modelorname->name,
            'user' => $user->name
        ]));

    }
}
