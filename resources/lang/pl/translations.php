<?php

return [
    'menu' => [
        'log-viewer' => 'Logi',
    ],

    'buttons' => [
        'cancel' => 'Anuluj',
        'store' => 'Dodaj',
        'update' => 'Aktualizuj',
    ],

    'labels' => [
        'select2' => [
            'placeholders' => [
                'manufacturer' => 'Dell',
                'model' => 'Latitude 5520',
                'category' => 'Laptop',
                'manufacturer_and_model' => 'Dell Latitude 5520',
                'user' => 'Grzegorz Brzęczyszczykiewicz (grzegorz@interia.pl)',
                'role' => 'wybierz rolę'
            ],

            'other' => [
                'placeholders' => [
                    'serialnumber' => '6SM72HKl',
                    'purcharse_date' => '29/12/1999',
                    'name_and_surname' => 'Grzegorz Brzęczyszczykiewicz',
                    'email' => 'grzegorz.brzeczyszczykiewicz@gmail.com',
                    'password' => '*********'
                ]
            ],
        ],
    ],

    'attribute' => [
        'created_at' => 'utworzono',
        'updated_at' => 'zaktualizowano',
        'deleted_at' => 'usunięto',
    ],

    'manufacturers' => [
        'title' => 'Producenci',

        'labels' => [
            'create' => 'Dodanie nowego producenta',
            'edit' => 'Edycja producenta',
            'delete' => 'Usunięciei producenta',
        ],

        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość modeli',
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano producenta :name',
                'updated' => 'Zaktualizowano producenta :name',
                'nothing-changed' => 'Dane producenta :name nie zmieniły się',
            ]
        ],
    ],

    'models_or_names' => [
        'title' => 'Modele',

        'labels' => [
            'create' => 'Dodanie nowego modelu',
            'edit' => 'Edycja modelu',
            'delete' => 'Usunięcie modelu',
        ],

        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość producentów',
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano model :name',
                'updated' => 'Zaktualizowano model :name',
                'nothing-changed' => 'Dane modelu :name nie zmieniły się',
            ]
        ],
    ],

    'categories' => [
        'title' => 'Kategorie',

        'labels' => [
            'create' => 'Dodanie nowej kategorii',
            'edit' => 'Edycja kategorii',
            'delete' => 'Usunięcie kategorii'
        ],

        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość przedmiotów',
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano kategorie :name',
                'updated' => 'Zaktualizowano kategorie :name',
                'nothing-changed' => 'Dane kategorii :name nie zmieniły się',
            ]
        ],
    ],

    'items' => [
        'title' => 'Przedmioty',

        'labels' => [
            'create' => 'Dodanie nowego przedmiotu',
            'edit' => 'Edycja przedmiotu',
            'delete' => 'Usunięcie przedmiotu',
        ],

        'attribute' => [
            'manufacturer' => 'producent',
            'model_or_name' => 'model',
            'category' => 'kategoria',
            'users_count' => 'ilość mienia'
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano nowy przedmiot :manufacturer :model_or_name w kategorii :category',
                'updated' => 'Zaktualizowano przedmiot :manufacturer :model_or_name w kategorii :category',
                'nothing-changed' => 'Dane przedmiotu :manufacturer :model_or_name nie zmieniły się',
            ]
        ],
    ],

    'users' => [
        'title' => 'Użytkownicy',

        'labels' => [
            'create' => 'Dodanie nowego użytkownika',
            'edit' => 'Edycja użytkownika',
            'delete' => 'Usunięcie użytkownika',
        ],

        'attribute' => [
            'name' => 'imię i nazwisko',
            'mail' => 'email',
            'password' => 'hasło',
            'role' => 'rola',
            'count' => 'ilość mienia'
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano użytkownika :email, rola: :role',
                'updated' => 'Zaktualizowano użytkownika :email',
                'nothing-changed' => 'Dane użytkownika :email nie zmieniły się',
            ]
        ],
    ],

    'inventory' => [
        'title' => 'Spis mienia',

        'labels' => [
            'create' => 'Przypisanie nowego mienia',
            'edit' => 'Edycja mienia',
            'delete' => 'Usunięcie mienia',
        ],

        'titleForUsers' => 'Twoje mienie',
        'attribute' => [
            'manufacturer' => 'producent',
            'model_or_name' => 'model',
            'category' => 'kategoria',
            'user' => 'użytkownik',
            'serial_number' => 'identyfikator',
            'purcharse_date' => 'data zakupu',
            'warranty_end' => 'data zakończenia gwarancji',
            'assignment_date' => 'data przypisania',
            'item' => 'przedmiot',
            'now' => 'dzisiejsza'
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Przypisano przedmiot: :manufacturer :model_or_name do użytkownika: :user',
                'updated' => 'Zaktualizowano mienie :manufacturer :model_or_name o numerze :serial_number',
                'nothing-changed' => 'Dane mienia :manufacturer :model_or_name o numerze :serial_number nie zmieniły się',
            ]
        ],
    ],
];