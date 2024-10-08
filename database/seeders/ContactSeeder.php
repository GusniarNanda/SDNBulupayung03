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
            'name'=>'Company',
            'description'=>'lorem ipsum',
            'logo'=>'logo.png',
            'alamat'=>'Jl. Jendral Sudirman No. 100',
            'email'=>'Company@gmail.com',
            'telepon'=>'09184812312',
            'maps_embed'=>'maps.com',
        ]);
    }
}
