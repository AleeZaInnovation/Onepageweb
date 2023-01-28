<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menu = [
            [
                'id'             => 1,
                'title'           => 'Doctors Accounting',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 2,
                'title'           => 'Broker Accounting',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 3,
                'title'           => 'Lawyer Accounting',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 4,
                'title'           => 'Business accounting',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 5,
                'title'           => 'Taxes at Death',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],


        ];

        Menu::insert($menu);
    }
}
