<?php

namespace App\Http\Requests\Items;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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

            // czyli np. nie moze sie zdublowac producent+model
            'manufacturer_id' => ['required', 'integer', 'exists:manufacturers,id', 
                Rule::unique('items')->where( function($query){
                    return $query->where('manufacturer_id', $this->manufacturer_id)
                                ->where('model_or_name_id', $this->model_or_name_id);
                })
            ],

            'model_or_name_id' => ['required', 'integer', 'exists:model_or_names,id',
                Rule::unique('items')->where( function($query){
                    return $query->where('manufacturer_id', $this->manufacturer_id)
                                ->where('model_or_name_id', $this->model_or_name_id);
                })
            ],
            'category_id' => ['required', 'integer', 'exists:categories,id']
        ];
    }

    public function messages() {
        return [
            'manufacturer_id.unique' => __('validation.custom.items.manufacturer_model_unique'),
            'model_or_name_id.unique' => __('validation.custom.items.manufacturer_model_unique')
        ];
    }

     // zwraca tlumaczenia atrybutow - beda one obowiazywac tylko w tej klasie!; czyli jesli w tlumaczeniach w translations/lang/pl jest :name, to bedzie zastapione tym z dolu
    public function attributes() {
        return [
            ''
        ];
    }
}
