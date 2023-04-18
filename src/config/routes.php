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
        'Route' => 'Profile',
        'Controller' => 'Home',
        'Action' => 'Profile',
        'Layout' => 'Default',
        'View' => 'Profile',
        'Title' => 'Профиль'
    ],
    [
        'Route' => 'Stats',
        'Controller' => 'Home',
        'Action' => 'Statistic',
        'Layout' => 'Default',
        'View' => 'Statistic',
        'Title' => 'Статистика'
    ],
    [
        'Route' => 'Zalupatown',
        'Controller' => 'Home',
        'Action' => 'Zalupatown',
        'Layout' => 'Default',
        'View' => 'Zalupatown',
        'Title' => 'Да'
    ],
    [
        'Route' => 'Zalupatownedit',
        'Controller' => 'Home',
        'Action' => 'Zalupatownedit',
        'Layout' => 'Default',
        'View' => 'Zalupatownedit',
        'Title' => 'Да'
    ],
    [
        'Route' => 'admin/index',
        'Controller' => 'Home',
        'Action' => 'Zalupatownedit',
        'Layout' => 'Default',
        'View' => 'Zalupatownedit',
        'Title' => 'Да'
    ],
    [
        'Route' => 'admin/bank',
        'Controller' => 'Home',
        'Action' => 'Zalupatownedit',
        'Layout' => 'Default',
        'View' => 'Zalupatownedit',
        'Title' => 'Да'
    ]
];

return $routes;
