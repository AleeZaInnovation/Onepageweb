<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id'                    => 1,
                'usertype'              => 'Admin',
                'name'                  => 'Admin',
                'email'                 => 'admin@admin.com',
                'password'              => '$2y$10$qyxYm.2dlaXROvs0OrGHseo4qbeissRMqNWdhlcr/vUqE62vN94Fi',
                'mobile'                => '0123456789',
                'designation'           => 'Engineer',
                'address'               => 'Sylhet',
                'gender'                => 'Male',
                'image'                 => '',
                'status'                => 1,
                'remember_token'        => null,
                'created_at'            => '2022-12-27 14:00:26',
                'updated_at'            => '2022-12-27 14:00:26',
            ],
            [
                'id'                    => 2,
                'usertype'              => 'User',
                'name'                  => 'Sahacpa',
                'email'                 => 'sahacpa@admin.com',
                'password'              => '$2y$10$qyxYm.2dlaXROvs0OrGHseo4qbeissRMqNWdhlcr/vUqE62vN94Fi',
                'mobile'                => '0123456789',
                'designation'           => 'Owner',
                'address'               => 'Sylhet',
                'gender'                => 'Male',
                'image'                 => '',
                'status'                => 1,
                'remember_token'        => null,
                'created_at'            => '2022-12-27 14:00:26',
                'updated_at'            => '2022-12-27 14:00:26',
            ],
        ];

        User::insert($users);

    }
}
