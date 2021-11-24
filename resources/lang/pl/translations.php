<?php

return [
    'menu' => [
        'log-viewer' => 'Logi',
    ],

    'attribute' => [
        'created_at' => 'utworzono',
        'updated_at' => 'zaktualizowano',
        'deleted_at' => 'usunięto',
    ],

    'manufacturers' => [
        'title' => 'Producenci',
        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość przedmiotów',
        ],
    ],

    'models_or_names' => [
        'title' => 'Modele',
        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość przedmiotów',
        ],
    ],

    'categories' => [
        'title' => 'Kategorie',
        'attribute' => [
            'name' => 'nazwa',
            'count' => 'ilość przedmiotów',
        ]
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
        'attribute' => [
            'name' => 'imię i nazwisko',
            'mail' => 'email',
            'role' => 'rola',
            'count' => 'ilość przedmiotów'
        ],
    ],

    'inventory' => [
        'title' => 'Spis mienia',
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