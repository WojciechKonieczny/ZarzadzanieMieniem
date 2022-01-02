<?php

namespace App\Exports;

use App\Models\Item;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ItemsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View {
        return view(
            // stworzono odrębny widok, w którym zamieszczono tylko tabelkę z danymi, ponieważ wtyczka nie działa poprawnie, gdy są jakieś dodatkowe znaczniki (a generujemy na podstawie View)
            //https://github.com/SpartnerNL/Laravel-Excel/issues/3008
            'items.table', // nazwa szablony
            [
                'items' => Item::with('manufacturer', 'modelorname', 'category')->withTrashed()->withCount('users')->get()
            ]
        );
    }
}
