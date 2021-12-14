<?php

namespace App\Http\Requests\Users;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:5', 'regex:/[a-zA-Z\s]{3,}[A-Za-z]$/'],
            'email' => [
                'required', 'string',
                Rule::unique('users')->ignore($this->user)
            ],
            'password' => ['required', 'string', 'min:8'],
            'role_id' => ['required', 'integer', 'exists:roles,id']
        ];
    }

    // metoda, ktora zastapi "glowne" tlumaczenia w danym komponencie - np. jesli chcemy je spersonalizowac
    public function messages() {
        return [
            'name.regex' => __('validation.custom.users.name_regex'),
            'name.min' => __('validation.custom.users.name'),
            'email.unique' => __('validation.custom.users.email_unique'),
            'password.min' => __('validation.custom.users.password_min'),
        ];
    }

    // zwraca tlumaczenia atrybutow - beda one obowiazywac tylko w tej klasie!; czyli jesli w tlumaczeniach w translations/lang/pl jest :name, to bedzie zastapione tym z dolu
    public function attributes() {
        return [
            'name' => __('translations.users.attribute.name'),
            'email' => __('translations.users.attribute.mail')
        ];
    }
}
