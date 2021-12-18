<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\User;
use App\Models\Category;
use App\Models\ModelOrName;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Inventories\InventoryRequest;
use App\Http\Request\Inventories\InventoryWithoutDateRequest;

class InventoryController extends Controller
{
    public function index() {

        // dd( Item::with('manufacturer', 'modelorname', 'category')->get() );

        return view(
            'inventory.index', // nazwa szablony
            [
                'items' => Item::with('manufacturer', 'modelorname', 'category', 'users')->withTrashed()->get()

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

     // wyswietlajaca formularz
     public function edit(Request $request, Item $item) {
        $isEdit = true;

        // pobieram tylko jeden wiersz (ten ktory chce usunac) z tabeli 'item_user' - przydadza mi sie dane typu item_id
        $inventory = DB::table('item_user')->where('id', $item->id)->first();
        $inventoryId = $item->id;
        
        $items = Item::orderBy('category_id')->with('manufacturer', 'modelorname', 'category', 'users')->get();
        $users = User::orderBy('name')->with('items')->get();

        // pobieram stare wartosci, by
        $item = Item::find($inventory->item_id);
        $oldUser = User::find($inventory->user_id);
        $oldSerial = $inventory->serial_number;
        $oldPurcharse = $inventory->purcharse_date;
        $oldWarranty = $inventory->warranty_end;
        $oldAssignment = $inventory->assignment_date;

        return view(
            'inventory.create', 
            compact( 'isEdit', 'items', 'users', 'item', 'oldUser', 'oldSerial', 'oldPurcharse', 'oldWarranty', 'oldAssignment', 'inventoryId')
        );
    }

    // wysylajace dane do bazy
    public function update(InventoryRequest $request, $id) {

        // pobieram tylko jeden wiersz (ten ktory chce edytowac) z tabeli 'item_user' - przydadza mi sie dane typu item_id
        $inventory = DB::table('item_user')->where('id', '=', $id)->first();

        DB::table('item_user')->where('id', $id)->update([
            'user_id' => $request->user_id,
            'item_id' => $request->item_id,
            'serial_number' => $request->serial_number, 
            'purcharse_date' => $request->purcharse_date,
            'warranty_end' => $request->warranty_end,
            'assignment_date' => $request->assignment_date
        ]);

        // $item->users()->save( $request->user_id, [ 
        //     'serial_number' => $request->serial_number, 
        //     'purcharse_date' => $request->purcharse_date,
        //     'warranty_end' => $request->warranty_end,
        //     'assignment_date' => $request->assignment_date
        // ]);

        return redirect()->route('inventory.index')->with( 'success', __('translations.inventory.toasts.success.updated', [
            'serial_number' => 'test'
        ]));
    }

    public function destroy($id) {

        // pobieram tylko jeden wiersz (ten ktory chce usunac) z tabeli 'item_user' - przydadza mi sie dane typu item_id
        $inventory = DB::table('item_user')->where('id', $id)->first();

        $item = Item::find($inventory->item_id);

        // kasuje z tabeli tylko dany rekord
        $item->users()->where('item_user.id','=', $id)->delete();

        return redirect()->route('inventory.index')->with( 'success', __('translations.inventory.toasts.success.destroy', [
            'manufacturer' => $item->manufacturer->name,
            'model_or_name' => $item->modelorname->name,
            'serial_number' => $inventory->serial_number
        ]));
    }
}
