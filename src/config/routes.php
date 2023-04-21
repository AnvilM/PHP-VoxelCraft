<?php


$routes = [
    [
        'Route' => '',
        'Controller' => 'Home',
        'Action' => 'Index',
        'Layout' => 'Default',
        'View' => 'Index',
        'Title' => 'Главная'
    ],
    [
        'Route' => 'Towns',
        'Controller' => 'Home',
        'Action' => 'Towns',
        'Layout' => 'Default',
        'View' => 'Towns',
        'Title' => 'Города'
    ],
    [
        'Route' => 'Bank',
        'Controller' => 'Home',
        'Action' => 'Bank',
        'Layout' => 'Default',
        'View' => 'Bank',
        'Title' => 'Банк'
    ],
    [
        'Route' => 'Stats',
        'Controller' => 'Home',
        'Action' => 'Stats',
        'Layout' => 'Default',
        'View' => 'Stats',
        'Title' => 'Статистика'
    ],
    [
        'Route' => 'Profile',
        'Controller' => 'Profile',
        'Action' => 'Index',
        'Layout' => 'Default',
        'View' => 'Index',
        'Title' => 'Профиль'
    ],
    
    [
        'Route' => 'Town',
        'Controller' => 'Town',
        'Action' => 'Index',
        'Layout' => 'Default',
        'View' => 'Index',
        'Title' => 'Да'
    ],
    [
        'Route' => 'Town/Edit',
        'Controller' => 'Town',
        'Action' => 'Edit',
        'Layout' => 'Default',
        'View' => 'Edit',
        'Title' => 'Да'
    ],
    [
        'Route' => 'Admin',
        'Controller' => 'Admin',
        'Action' => 'Index',
        'Layout' => 'Default',
        'View' => 'Index',
        'Title' => 'Да'
    ],
    [
        'Route' => 'Admin/Bank',
        'Controller' => 'Admin',
        'Action' => 'Bank',
        'Layout' => 'Default',
        'View' => 'Bank',
        'Title' => 'Да'
    ]
];

return $routes;
