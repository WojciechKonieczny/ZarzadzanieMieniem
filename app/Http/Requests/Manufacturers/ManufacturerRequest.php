<?php

namespace App\Http\Requests\Manufacturers;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ManufacturerRequest extends FormRequest
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
        return [
            'name' => [
                'required', 'string', 'max:25', 
                Rule::unique('manufacturers')->ignore($this->manufacturer) // potrzebne, by podczas edycji i zostawieniu wpisanej wartości, nie krzyczał błędem o tym, że jest zduplikowana wartość
            ],
        ];
    }

    // metoda, ktora zastapi "glowne" tlumaczenia w danym komponencie - np. jesli chcemy je spersonalizowac
    public function messages() {
        return [
            'name.unique' => __('validation.custom.manufacturers.name_unique')
        ];
    }

    // zwraca tlumaczenia atrybutow - beda one obowiazywac tylko w tej klasie!; czyli jesli w tlumaczeniach w translations/lang/pl jest :name, to bedzie zastapione tym z dolu
    public function attributes() {
        return [
            'name' => __('translations.manufacturers.attribute.name')
        ];
    }
}
