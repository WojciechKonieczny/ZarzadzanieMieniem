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

    'models' => [
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
            'modelOrName' => 'model',
            'category' => 'kategoria'
        ]
    ],

    'item_user' => [
        'title' => 'Spis mienia',
        'attribute' => [
            'manufacturer' => 'producent',
            'modelOrName' => 'model',
            'category' => 'kategoria'
        ]
    ],
];