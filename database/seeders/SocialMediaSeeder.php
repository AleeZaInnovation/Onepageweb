<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SocialMedia;
class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $socail = [
            [
                'id'             => 1,
                'title'           => 'Facebook',
                'link'          => 'https://www.facebook.com/',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 2,
                'title'           => 'Twitter',
                'link'          => 'https://twitter.com/',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 3,
                'title'           => 'LinkedIn',
                'link'          => 'https://www.linkedin.com/',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 4,
                'title'           => 'Instrgram',
                'link'          => 'https://www.instagram.com/',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
            [
                'id'             => 5,
                'title'           => 'YouTube',
                'link'          => 'https://youtube.com/',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],
        ];
        SocialMedia::insert($socail);
    }
}
