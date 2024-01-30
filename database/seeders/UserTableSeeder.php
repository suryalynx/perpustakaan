<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Add this line
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        DB::table('users')->insert([

        [
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111'),
            'gender' => 'L',
            'role' => 'admin',
            'status' => 'active',
        ],

        // Employee
        [
            'name' => 'Employee',
            'username' => 'employee',
            'email' => 'employee@gmail.com',
            'password' => Hash::make('111'),
            'gender' => 'P',
            'role' => 'employee',
            'status' => 'active',
        ]
        
        ]);

    }
}
