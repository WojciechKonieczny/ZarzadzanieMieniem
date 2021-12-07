<?php

return [
    'menu' => [
        'log-viewer' => 'Logi',
    ],

    'buttons' => [
        'cancel' => 'Anuluj',
        'store' => 'Dodaj',
    ],

    'attribute' => [
        'created_at' => 'utworzono',
        'updated_at' => 'zaktualizowano',
        'deleted_at' => 'usunięto',
    ],

    'manufacturers' => [
        'title' => 'Producenci',

        'labels' => [
            'create' => 'Dodanie nowego producenta'
        ],

        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość modeli',
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano producenta :name',
            ]
        ],
    ],

    'models_or_names' => [
        'title' => 'Modele',

        'labels' => [
            'create' => 'Dodanie nowego modelu'
        ],

        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość producentów',
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano model :name',
            ]
        ],
    ],

    'categories' => [
        'title' => 'Kategorie',

        'labels' => [
            'create' => 'Dodanie nowej kategorii'
        ],

        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość przedmiotów',
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano kategorie :name',
            ]
        ],
    ],

    'items' => [
        'title' => 'Przedmioty',
        'attribute' => [
            'manufacturer' => 'producent',
            'model_or_name' => 'model',
            'category' => 'kategoria'
        ]
    ],

    'users' => [
        'title' => 'Użytkownicy',

        'labels' => [
            'create' => 'Dodanie nowego użytkownika'
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
                'stored' => 'Dodano użytkownika :name',
            ]
        ],
    ],

    'inventory' => [
        'title' => 'Spis mienia',
        'titleForUsers' => 'Twoje mienie',
        'attribute' => [
            'manufacturer' => 'producent',
            'model_or_name' => 'model',
            'category' => 'kategoria',
            'user' => 'użytkownik',
            'serial_number' => 'identyfikator',
            'purcharse_date' => 'zakup',
            'warranty_end' => 'koniec gwarancji',
            'assignment_date' => 'przypisanie'
        ]
    ],
];