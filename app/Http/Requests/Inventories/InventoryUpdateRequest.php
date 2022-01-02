<?php

namespace App\Http\Requests\Inventories;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class InventoryUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // do aktualizacji mam oddzielny Request
        
        // przyda sie do unikniecia bledu "ta wartosc juz istnieje" przy edycji i niezmienianiu serial_number
        // niestety jest to "pole dodatkowe" w tabeli pivot - nie jest ani skladnikiem obiektu User, ani Item
        $inventory = DB::table('item_user')->where('id', '=', $this->id)->first();

        return [
            'item_id' => ['required', 'integer', 'exists:items,id'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'serial_number' => ['string', 'min:5', 'max:12', 'nullable', 'regex:/^[A-Z0-9]{5,}$/',
                Rule::unique('item_user')->ignore($inventory->id)],
            'purcharse_date' => ['date', 'nullable', 'before_or_equal:now', 'before:assignment_date'],
            'warranty_end' => ['date', 'nullable', 'after_or_equal:purcharse_date'],
            'assignment_date' => ['date', 'nullable', 'before_or_equal:now']
        ];
    }

    // zwraca tlumaczenia atrybutow - beda one obowiazywac tylko w tej klasie!; czyli jesli w tlumaczeniach w translations/lang/pl jest :name, to bedzie zastapione tym z dolu
    public function attributes() {
        return [
            'item_id' => __('translations.inventory.attribute.item'),
            'user_id' => __('translations.inventory.attribute.user'),
            'serial_number' => __('translations.inventory.attribute.serial_number'),
            'purcharse_date' => __('translations.inventory.attribute.purcharse_date'),
            'warranty_end' => __('translations.inventory.attribute.warranty_end'),
            'assignment_date' => __('translations.inventory.attribute.assignment_date')
        ];
    }

    public function messages() {
        return [
            'serial_number.unique' => __('validation.custom.inventory.serial_number_unique'),
            'serial_number.regex' => __('validation.custom.inventory.serial_number_regex'),
            'assignment_date.before_or_equal' => __('validation.custom.inventory.now_before_or_equal'),
            'purcharse_date.before_or_equal' => __('validation.custom.inventory.now_before_or_equal'),
            'purcharse_date.before' => __('validation.custom.inventory.purcharse_date_before_assignment_date'),
            'warranty_end.after_or_equal' => __('validation.custom.inventory.warranty_end_after_or_equal'),
        ];
    }
}
