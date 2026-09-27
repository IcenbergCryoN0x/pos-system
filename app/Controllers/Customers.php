<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Rowgene Zuckerberg',
                'email' => 'Rowgene@example.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Helen Cruz',
                'email' => 'helen@example.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Sean Baldwin',
                'email' => 'Sean@example.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Wilduard Netangyahu',
                'email' => 'wilduard@example.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Jeremiah Xipingfu',
                'email' => 'jeremiah@example.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers/index', [
            'customers' => $customers
        ]);
    }
}