<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create ([
            'alamat'=>'Jl. Jendral Sudirman No. 100',
            'email'=>'Company@gmail.com',
            'telepon'=>'09184812312',
            'maps_embed'=>'maps.com',
            'link_email'=>'mailto:Company@gmail.com',
            'link_telepon'=>'https://wa.me/qr/7JAY62NYXR46A1',
        ]);
    }
}
