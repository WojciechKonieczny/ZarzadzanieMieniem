<?php

return [

    'title' => 'Aplikacja do zarządzania mieniem',

    'menu' => [
        'log-viewer' => 'Logi',
        'admin-panel' => 'Panel administratora',
    ],

    'buttons' => [
        'cancel' => 'Anuluj',
        'store' => 'Dodaj',
        'update' => 'Aktualizuj',
        'yes' => 'Tak',
        'no' => 'Nie',
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
            'delete' => 'Usunięcie producenta',
            'destroy' => 'Usunięcie producenta',
            'destroy-question' => 'Czy na pewno usunąć producenta :name?',
            'restore' => 'Przywrócenie producenta',
            'restore-question' => 'Czy na pewno przywrócić producenta :name?',
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
                'destroy' => 'Producent :name został usunięty',
                'restore' => 'Producent :name został przywrócony'
            ]
        ],
    ],

    'models_or_names' => [
        'title' => 'Modele',

        'labels' => [
            'create' => 'Dodanie nowego modelu',
            'edit' => 'Edycja modelu',
            'delete' => 'Usunięcie modelu',
            'destroy' => 'Usunięcie modelu',
            'destroy-question' => 'Czy na pewno usunąć model :name?',
            'restore' => 'Przywrócenie modelu',
            'restore-question' => 'Czy na pewno przywrócić model :name?',
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
                'destroy' => 'Model :name został usunięty',
                'restore' => 'Model :name został przywrócony'
            ]
        ],
    ],

    'categories' => [
        'title' => 'Kategorie',

        'labels' => [
            'create' => 'Dodanie nowej kategorii',
            'edit' => 'Edycja kategorii',
            'delete' => 'Usunięcie kategorii',
            'destroy' => 'Usunięcie kateogrii',
            'destroy-question' => 'Czy na pewno usunąć kategorię :name?',
            'restore' => 'Przywrócenie kategorii',
            'restore-question' => 'Czy na pewno przywrócić kategorię :name?',
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
                'destroy' => 'Kategoria :name została usunięta',
                'restore' => 'Kategoria :name została przywrócona'
            ]
        ],
    ],

    'items' => [
        'title' => 'Przedmioty',

        'labels' => [
            'create' => 'Dodanie nowego przedmiotu',
            'edit' => 'Edycja przedmiotu',
            'delete' => 'Usunięcie przedmiotu',
            'destroy' => 'Usunięcie przedmiotu',
            'destroy-question' => 'Czy na pewno usunąć przedmiot :manufacturer :model_or_name?',
            'restore' => 'Przywrócenie przedmiotu',
            'restore-question' => 'Czy na pewno przywrócić przedmiot :manufacturer :model_or_name?',
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
                'destroy' => 'Przedmiot :manufacturer :model_or_name został usunięty',
                'restore' => 'Przedmiot :manufacturer :model_or_name został przywrócony'
            ]
        ],
    ],

    'users' => [
        'title' => 'Użytkownicy',

        'labels' => [
            'create' => 'Dodanie nowego użytkownika',
            'edit' => 'Edycja użytkownika',
            'delete' => 'Usunięcie użytkownika',
            'destroy' => 'Usunięcie użytkownika',
            'destroy-question' => 'Czy na pewno usunąć użytkownika :email?',
            'restore' => 'Przywrócenie użytkownika',
            'restore-question' => 'Czy na pewno przywrócić użytkownika :email?',
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
                'destroy' => 'Użytkownik :email został usunięty',
                'restore' => 'Użytkownik :email został przywrócony'
            ]
        ],
    ],

    'inventory' => [
        'title' => 'Spis mienia',

        'labels' => [
            'create' => 'Przypisanie nowego mienia',
            'edit' => 'Edycja mienia',
            'delete' => 'Usunięcie mienia',
            'destroy' => 'Usunięcie mienia',
            'destroy-question' => 'Czy na pewno usunąć mienie :manufacturer :model_or_name (ID: :serial_number)?',
            'restore' => 'Przywrócenie mienia',
            'restore-question' => 'Czy na pewno przywrócić menie :manufacturer :model_or_name (ID: :serial_number)?',
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
                'updated' => 'Zaktualizowano mienie o identyfikatorze :serial_number',
                'nothing-changed' => 'Dane mienia :manufacturer :model_or_name o numerze :serial_number nie zmieniły się',
                'destroy' => 'Mienie :manufacturer :model_or_name (ID: :serial_number) zostało usunięte',
                'restore' => 'Mienie :manufacturer :model_or_name zostało przywrócone',
            ]
        ],
    ],
];