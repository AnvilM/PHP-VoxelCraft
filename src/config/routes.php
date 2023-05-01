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
        'Route' => 'Stats',
        'Controller' => 'Home',
        'Action' => 'Stats',
        'Layout' => 'Default',
        'View' => 'Stats',
        'Title' => 'Статистика'
    ],
    [
        'Route' => 'Map',
        'Controller' => 'Home',
        'Action' => 'Map',
        'Layout' => 'Default',
        'View' => 'Map',
        'Title' => 'Да'
    ],
    [
        'Route' => 'Profile/Bank',
        'Controller' => 'Profile',
        'Action' => 'Bank',
        'Layout' => 'Default',
        'View' => 'Bank',
        'Title' => 'Банк'
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
    ],

    [
        'Route' => 'Profile/Signin',
        'Controller' => 'Profile',
        'Action' => 'Signin',
        'Layout' => 'Default',
        'View' => '',
        'Title' => 'Да'
    ],
    [
        'Route' => 'Profile/Logout',
        'Controller' => 'Profile',
        'Action' => 'logout',
        'Layout' => 'Default',
        'View' => '',
        'Title' => 'Да'
    ],
    [
        'Route' => 'Town/Create',
        'Controller' => 'Town',
        'Action' => 'Create',
        'Layout' => 'Default',
        'View' => '',
        'Title' => 'Да'
    ],

    [
        'Route' => 'Admin/Main',
        'Controller' => 'Admin',
        'Action' => 'Main',
        'Layout' => 'Default',
        'View' => 'Main',
        'Title' => 'Да'
    ],

    [
        'Route' => 'Admin/Settings',
        'Controller' => 'Admin',
        'Action' => 'Settings',
        'Layout' => 'Default',
        'View' => 'Settings',
        'Title' => 'Да'
    ],
    [
        'Route' => 'Buy',
        'Controller' => 'Home',
        'Action' => 'Buy',
        'Layout' => '',
        'View' => '',
        'Title' => ''
    ],
    [
        'Route' => 'API/set.skin',
        'Controller' => 'API',
        'Action' => 'SET_SKIN',
        'Layout' => '',
        'View' => '',
        'Title' => ''
    ],
    [
        'Route' => 'API/get.skin',
        'Controller' => 'API',
        'Action' => 'GET_SKIN',
        'Layout' => '',
        'View' => '',
        'Title' => ''
    ],
    [
        'Route' => 'API/get.avatar',
        'Controller' => 'API',
        'Action' => 'GET_AVATAR',
        'Layout' => '',
        'View' => '',
        'Title' => ''
    ],
    [
        'Route' => 'API/add.role',
        'Controller' => 'API',
        'Action' => 'ADD_ROLE',
        'Layout' => '',
        'View' => '',
        'Title' => ''
    ],
    [
        'Route' => 'API/remove.role',
        'Controller' => 'API',
        'Action' => 'REMOVE_ROLE',
        'Layout' => '',
        'View' => '',
        'Title' => ''
    ],

];

return $routes;
