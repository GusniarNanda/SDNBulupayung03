<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisi')->insert([
            'visi' => 'Menjadikan sekolah sebagai lembaga yang beriman, bertaqwa, berakhlak mulia, dan berwawasan lingkungan.',
           'misi' => '1. Meningkatkan kualitas pendidikan dengan mengembangkan kurikulum yang berorientasi pada kompetensi, kemampuan, dan keterampilan.'
            ]);
    }
}
