<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SpacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spaces')->insert([
            'id' => 'SC0001',
            'id_category' => 'GP02',
            'nama' => 'Tumpak Sewu',
            'slug' => 'Tumpak Sewu',
            'foto' => 'tumpak_sewu.jpeg',
            'deskripsi' => 'Air Terjun Tumpak Sewu memiliki ciri khas yang unik, yaitu memiliki bentangan air terjun yang sangat lebar dengan tinggi sekitar 120 meter. Airnya mengalir dari tebing curam, membentuk tirai air yang menakjubkan di tengah hutan tropis yang rimbun. Di sekitar air terjun, terdapat formasi bebatuan dan vegetasi yang indah, menciptakan lanskap alam yang spektakuler.',
            'alamat' => 'Kecamatan Ampelgading - Desa Sidorenggo',
            'titik_koordinat' => '-8.225115549711417, 112.91450791760344',
            'jam_buka' => '07.00 - 05.00',
            'harga_weekday' => 15000,
            'harga_weekend' => 20000,
            'kontak' => '082234936523',
            'sosmed' => '@coban_sewu',
            'id_marker' => '2',
            'created_at' => '2023-06-17',
            'updated_at' => '2023-06-17'
        ]);
    }
}
