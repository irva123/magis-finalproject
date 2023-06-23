<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->insert([
            'nama' => 'Rapat Bandung',
            'foto' => 'Rapat_bandung.jpeg',
            'deskripsi' => 'hihih',
            'alamat_kegiatan' => 'bandung',
            'tanggal_kegiatan' => '24-06-2023',
            'waktu_kegiatan' => '13.00',
            'penyelenggara_kegiatan'=>'bandung',
            'created_at' => '2023-06-16',
            'updated_at' => '2023-06-16',
        ]);
    
    }
        
    
}



