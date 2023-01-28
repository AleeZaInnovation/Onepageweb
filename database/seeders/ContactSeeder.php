<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $contact = [
            [
                'id'             => 1,
                'mobile'           => '+416 855 9033',
                'email'          => 'Info@Shahacpa.Ca.',
                'address'          => '2 Bloor St W Swite 700 Toranto, ON M4W 3E2, Canada',
                'created_at'     => '2022-12-26 14:00:26',
                'updated_at'     => '2022-12-26 14:00:26',
            ],

        ];

        Contact::insert($contact);
    }
}
