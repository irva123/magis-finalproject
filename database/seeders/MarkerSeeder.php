<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marker = [
            ['marker' => 'icon-abu.png',],
            ['marker' => 'icon-ungu.png',],
            ['marker' => 'icon-hijau.png',],
            ['marker' => 'icon-biru.png',],
            ];
            DB::table('marker')->insert($marker);
    }
}
