<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:25', 'unique:categories']
        ];
    }

    // metoda, ktora zastapi "glowne" tlumaczenia w danym komponencie - np. jesli chcemy je spersonalizowac
    public function messages() {
        return [
            'name.unique' => __('validation.custom.categories.name_unique')
        ];
    }

     // zwraca tlumaczenia atrybutow - beda one obowiazywac tylko w tej klasie!; czyli jesli w tlumaczeniach w translations/lang/pl jest :name, to bedzie zastapione tym z dolu
    public function attributes() {
        return [
            'name' => __('translations.categories.attribute.name')
        ];
    }
}
