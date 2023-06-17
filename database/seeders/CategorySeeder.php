<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'id' => 'GP01',
            'nama' => 'Geoheritage',
            'foto' => 'Geoheritage.jpeg',
            'deskripsi' => 'Geoheritage mengacu pada warisan geologi yang berharga dan penting dari segi ilmiah, estetika, budaya, dan pendidikan. Geoheritage meliputi formasi geologi, ciri-ciri geomorfologi, situs fosil, sumber daya mineral, batuan, dan kekayaan alam lainnya yang memiliki nilai signifikan dalam memahami sejarah bumi dan evolusi alam.',
            'created_at' => '2023-06-16',
            'updated_at' => '2023-06-16'
        ]);

        DB::table('category')->insert([
            'id' => 'GP02',
            'nama' => 'Geodiversity',
            'foto' => 'Geodiversity.jpeg',
            'deskripsi' => 'Geodiversity adalah gambaran keunikan komponen geologi seperti mineral, batuan, fosil, struktur geologi, dan bentang alam yang menjadi kekayaan hakiki suatu daerah serta keberadaan, kekayaan penyebaran, dan keadaannya yang dapat mewakili proses evolusi geologi daerah tersebut.',
            'created_at' => '2023-06-16',
            'updated_at' => '2023-06-16'
        ]);

        DB::table('category')->insert([
            'id' => 'GP03',
            'nama' => 'Biodiversity',
            'foto' => 'Biodiversity.jpeg',
            'deskripsi' => 'Biodiversity adalah keragaman diantara makhluk hidup, dari berbagai sumber termasuk daratan, pesisir, lautan dan ekosistem perairan lainnya serta kompleksitas ekologis dimana mereka merupakan bagiannya.',
            'created_at' => '2023-06-16',
            'updated_at' => '2023-06-16'
        ]);

        DB::table('category')->insert([
            'id' => 'GP04',
            'nama' => 'Cultural Diversity',
            'foto' => 'Cultural.jpeg',
            'deskripsi' => 'Cultural Divesitybudaya masa lalu dan budaya masa kini, baik yang bersifat berwujud (tangible) maupun tidak berwujud (intangible).
            keragaman Indonesia meliputi rumah adat, upacara adat, alat musik tradisional, pakaian adat, tarian adat, lagu daerah, senjata tradisional, hingga makanan khas.',
            'created_at' => '2023-06-16',
            'updated_at' => '2023-06-16'
        ]);
    }
}
