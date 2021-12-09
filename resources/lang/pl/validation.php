<?php

return array(
	"accepted"             => ":attribute musi zostać zaakceptowane.", //yes, 1, true
	"active_url"           => ":attribute nie jest prawidłowym adresem URL.",
	"after"                => ":attribute musi być datą późniejszą niż :date.",
	"alpha"                => ":attribute może zawierać tylko litery.",
	"alpha_dash"           => ":attribute może zawierać tylko litery, cyfry i podkreślenia.",
	"alpha_num"            => ":attribute może zawierać tylko litery i cyfry.",
	"array"                => ":attribute musi być tablicą.",
	"before"               => ":attribute musi być datą wcześniejszą niż :date.",
	"before_or_equal"	   => ":attribute nie może być datą późniejszą, niż :date",
	"after_or_equal"	   => ":attribute nie może być datą wcześniejszą, niż :date",
	"between"              => array(
		"numeric" => ":attribute musi być wartością pomiędzy :min i :max.",
		"file"    => ":attribute musi mieć pomiędzy :min a :max kilobajtów.",
		"string"  => ":attribute musi mieć pomiędzy :min a :max znaków.",
		"array"   => ":attribute musi mieć pomiędzy :min a :max pozycji.",
	),
	"boolean"              => "Pole :attribute musi być true lub false",
	"confirmed"            => ":attribute confirmation does not match.",
	"date"                 => ":attribute nie jest prawidłową datą.",
	"date_format"          => ":attribute nie zgadza się z formatem :format.",
	"different"            => ":attribute i :other muszą być różne.",
	"digits"               => ":attribute musi mieć :digits cyfr.",
	"digits_between"       => ":attribute musi mieć pomiędzy :min a :max cyfr.",
	"email"                => ":attribute must be a valid email address.",
	"exists"               => "Wybrany :attribute jest nieprawidłowy.",
	"image"                => ":attribute musi być obrazkiem.",
	"in"                   => "Wybrany :attribute jest nieprawidłowy.",
	"integer"              => ":attribute musi być liczbą.",
	"ip"                   => ":attribute musi być poprawnym adresem IP.",
	"max"                  => array(
		"numeric" => ":attribute nie może być większy niż :max.",
		"file"    => ":attribute nie może być większy niż :max kilobajtów.",
		"string"  => ":attribute nie może być dłuższy niż :max znaków.",
		"array"   => ":attribute nie może mieć więcej niż :max pozycji.",
	),
	"mimes"                => ":attribute musi być plikiem typu: :values.",
	"min"                  => array(
		"numeric" => ":attribute musi większy lub równy :min.",
		"file"    => ":attribute musi mieć co najmniej :min kilobajtów.",
		"string"  => ":attribute musi mieć co najmniej :min znaków.",
		"array"   => ":attribute musi mieć co najmniej :min pozycji.",
	),
	"not_in"               => "Wybrany :attribute jest nieprawidłowy.",
	"numeric"              => ":attribute must be a number.",
	"regex"                => "format :attribute jest nieprawidłowy",
	"required"             => "Pole :attribute jest wymagane.",
	"required_if"          => "Pole :attribute jest wymagane, gdy :other ma wartość :value.",
	"required_with"        => "Pole :attribute jest wymagane, gdy :values są zdefiniowane.",
	"required_with_all"    => "Pole :attribute jest wymagane, gdy :values są zdefiniowane.",
	"required_without"     => "Pole :attribute jest wymagane, gdy :values nie są zdefiniowane.",
	"required_without_all" => "Pole :attribute jest wymagane, gdy żadne z :values nie są zdefiniowane.",
	"same"                 => ":attribute i :other muszą być takie same.",
	"size"                 => array(
		"numeric" => ":attribute must be :size.",
		"file"    => ":attribute musi mieć :size kilobajtów.",
		"string"  => ":attribute musi mieć :size znaków.",
		"array"   => ":attribute musi zawierać :size pozycji.",
	),
	"unique"               => ":attribute jest już zajęty.",
	"url"                  => "format :attribute jest nieprawidłowy.",
	"timezone"             => ":attribute musi być prawidłową strefą czasową.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'manufacturers' => [
			'name_unique' => 'Istnieje już producent, dla którego :attribute ma podaną wartość',
		],

		'categories' => [
			'name_unique' => 'Istnieje już kategoria, dla którego :attribute ma podaną wartość',
		],

        'products' => [
            'name_unique' => 'Istnieje już kategoria, dla którego :attribute ma podaną wartość',
		],

		'models_or_names' => [
			'name_unique' => 'Istnieje już model, dla którego :attribute ma podaną wartość',
		],

		'users' => [
			'name_unique' => 'Istnieje już użytkownik, dla którego :attribute ma podaną wartość',
			'name_regex' => ':attribute może się składać jedynie z liter oraz ewentualnej spacji',
			'email_unique' => 'Istnieje już użytkownik, dla którego :attribute ma podaną wartość',
			'password_min' => ':attribute musi się skladać z minimum :min znaków'
		],

		'items' => [
			'manufacturer_model_unique' => 'Istnieje już przedmiot w bazie o podanym producencie i modelu'
		],

		'inventory' => [
			'now_before_or_equal' => ':attribute nie może być późniejsza, niż dzisiejsza data',
			'purcharse_date_before_assignment_date' => ':attribute nie może być późniejsza, niż data przypisania',
			'warranty_end_after_or_equal' => ':attribute nie może być wcześniejsza, niż data zakupu',
			'serial_number_unique' => 'Istnieje już przedmiot, dla którego :attribute ma podaną wartość',
			'serial_number_regex' => ':attribute musi spełniać następujące wymagania: jest nullem, bądź ma długość od 5 do 12 znaków oraz składać się wyłącznie z cyfr i dużych liter'
		]
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [
		'username' => 'nazwa użytkownika',
        'name' => 'nazwa',
		'email' => 'adres email',
		'password' => 'hasło',
		'now' => 'dzisiaj',
		'role_id' => 'rola'
    ],

);