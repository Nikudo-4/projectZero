<?php

return [
//Main Controller
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'main/index/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'about' => [
        'controller' => 'main',
        'action' => 'about',
    ],
    'contacts' => [
        'controller' => 'main',
        'action' => 'contacts',
    ],
    'post/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'post',
    ],

//Admin Controller
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
    'admin/posts' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],
    'admin/posts/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'posts',
    ],

//Account Controller
    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],
];