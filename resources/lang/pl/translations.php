<?php

return [
    'menu' => [
        'log-viewer' => 'Logi',
    ],

    'buttons' => [
        'cancel' => 'Anuluj',
        'store' => 'Dodaj',
    ],

    'labels' => [
        'select2' => [
            'placeholders' => [
                'manufacturer' => 'Dell',
                'model' => 'Latitude 5520',
                'category' => 'Laptop',
                'manufacturer_and_model' => 'Dell Latitude 5520',
                'user' => 'Grzegorz Brzęczyszczykiewicz (grzegorz@interia.pl)'
            ],

            'other' => [
                'placeholders' => [
                    'serialnumber' => '6SM72HKl',
                    'purcharse_date' => '29/12/1999'
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

        'labels' => [
            'create' => 'Dodanie nowego przedmiotu'
        ],

        'attribute' => [
            'manufacturer' => 'producent',
            'model_or_name' => 'model',
            'category' => 'kategoria'
        ],

        'toasts' => [
            'success' => [
                'stored' => 'Dodano nowy przedmiot :manufacturer :model_or_name w kategorii :category',
            ]
        ],
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

        'labels' => [
            'create' => 'Przypisanie nowego mienia'
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
            ]
        ],
    ],
];