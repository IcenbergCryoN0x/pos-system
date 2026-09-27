<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'rowgene.admin',
                'full_name' => 'Rowgene Zuckerberg',
                'role' => 'Administrator'
            ],
            [
                'username' => 'helen.staff',
                'full_name' => 'Helen Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'sean.staff',
                'full_name' => 'Sean Baldwin',
                'role' => 'Cashier'
            ],
            [
                'username' => 'wilduard.manager',
                'full_name' => 'Wilduard Netangyahu',
                'role' => 'Manager'
            ],
            [
                'username' => 'jeremiah.staff',
                'full_name' => 'Jeremiah Xinpingfu',
                'role' => 'Cashier'
            ]
        ];

        return view('users/index', [
            'users' => $users
        ]);
    }
}