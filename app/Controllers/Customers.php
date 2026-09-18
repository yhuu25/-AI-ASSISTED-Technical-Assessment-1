<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
            [
                'full_name' => 'Pablo',
                'email' => 'Pablo@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'David',
                'email' => 'David@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Joselito',
                'email' => 'Joselito@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Rancey',
                'email' => 'Rancey@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Tyrone',
                'email' => 'Tyrone@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers/index', $data);
    }
}