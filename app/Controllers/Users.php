<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin01',
                'full_name' => 'Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Pablo',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'David',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Joselito',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Rancey',
                'role' => 'Staff'
            ]
        ];

        return view('users/index', $data);
    }
}