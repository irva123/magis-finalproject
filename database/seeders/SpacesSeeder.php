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
            'id_category' => '2',
            'nama' => 'Coban Sumberpitu',
            'foto' => 'Sumberpitu.jpg',
            'deskripsi' => 'Formasi yang utama berupa Batuan Gunung Api Tengger.',
            'alamat' => 'Kecamatan Tumpang - Desa Duwet Krajan',
            'titik_koordinat' => '-8.013466106879628, 112.82183693880064',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3950.859068529142!2d112.81926197376588!3d-8.013466092012763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMDAnNDguNSJTIDExMsKwNDknMTguNiJF!5e0!3m2!1sid!2sid!4v1687076559574!5m2!1sid!2sid',
            'jam_buka' => '08.00-18.00',
            'harga_weekday' => 5000,
            'harga_weekend' => 5000,
            'kontak' => '-',
            'sosmed' => '-',
            'id_marker' => '2',
            'created_at' => '2023-06-17',
            'updated_at' => '2023-06-17'
        ]);

        DB::table('spaces')->insert([
            'id_category' => '3',
            'nama' => 'Sumber Jenon',
            'foto' => 'SumberJenon.jpg',
            'deskripsi' => 'Ikan-ikan Sengkaring yang tidak diketahui pasti dari mana muasalnya, dianggap ikan dewa yang dipercaya masyarakat tidak berkurang atau bertambah jumlahnya sejak dahulu.',
            'alamat' => 'Kecamatan Tajinan - Desa Gunungronggo',
            'titik_koordinat' => '-8.049481881561393, 112.71637804421364',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3950.508661361917!2d112.71380307376633!3d-8.049481891977825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMDInNTguMSJTIDExMsKwNDInNTkuMCJF!5e0!3m2!1sid!2sid!4v1687076892406!5m2!1sid!2sid',
            'jam_buka' => '08.00-17.00',
            'harga_weekday' => 10000,
            'harga_weekend' => 10000,
            'kontak' => '087777753234',
            'sosmed' => '-',
            'id_marker' => '3',
            'created_at' => '2023-06-18',
            'updated_at' => '2023-06-18'
        ]);

        DB::table('spaces')->insert([
            'id_category' => '4',
            'nama' => 'Candi Singosari',
            'foto' => 'CandiSingosari.jpg',
            'deskripsi' => 'Candi Singosari "pendharmaan" raja Singasari terakhir, Kertanegara, yang mangkat pada tahun 1292.',
            'alamat' => 'Kecamatan Singosari - Desa Candirenggo',
            'titik_koordinat' => '-7.887467000124527, 112.66381855043845',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2349.9154724280174!2d112.66259134166917!3d-7.887641555440992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNTMnMTQuOSJTIDExMsKwMzknNDkuOCJF!5e0!3m2!1sid!2sid!4v1687077105279!5m2!1sid!2sid',
            'jam_buka' => '07.00-17.00',
            'harga_weekday' => 5000,
            'harga_weekend' => 5000,
            'kontak' => '-',
            'sosmed' => '-',
            'id_marker' => '4',
            'created_at' => '2023-06-18',
            'updated_at' => '2023-06-18'
        ]);

        DB::table('spaces')->insert([
            'id_category' => '2',
            'nama' => 'Pulau Sempu',
            'foto' => 'PulauSempu.jpg',
            'deskripsi' => 'Batu Gamping, Formasi yang utama berupa Wonosari.',
            'alamat' => 'Kecamatan Sumbermanjing Wetan - Desa Tambakrejo',
            'titik_koordinat' => '-8.441787739753613, 112.69793562161236',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d26549.66367890991!2d112.67262569691644!3d-8.437836961815094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMjYnMzAuNCJTIDExMsKwNDEnNTIuNiJF!5e0!3m2!1sid!2sid!4v1687077203307!5m2!1sid!2sid',
            'jam_buka' => '24 jam',
            'harga_weekday' => 160000,
            'harga_weekend' => 160000,
            'kontak' => '-',
            'sosmed' => '-',
            'id_marker' => '2',
            'created_at' => '2023-06-18',
            'updated_at' => '2023-06-18'
        ]);

        DB::table('spaces')->insert([
            'id_category' => '3',
            'nama' => 'Sekat Bakar',
            'foto' => 'SekatBakar.jpg',
            'deskripsi' => 'Pembuatan sekat bakar dibuat sebagai salah satu upaya pencegahan terhadap bahayanya kebakaran hutan dan lahan di kawasan TN BTS. Sekat bakar merupakan  kegiatan pembersihan lahan dengan memisahkan antara areal yang diperkirakan sebagai sumber datangnya api dengan areal yang harus diamankan dari kebakaran. Sekat bakar yang dibuat sepanjang 502 meter dengan lebar 7 meter, adapun alat yang digunakan dalam pembuatan sekat bakar menggunakan cangkul, sekop, golok, dan parang.',
            'alamat' => 'Kecamatan Poncokusumo - Desa Ngadas',
            'titik_koordinat' => '-7.981083117973982, 112.94334719462003',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d13679.42761042977!2d112.93894957227262!3d-7.984379250931566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNTgnNTEuOSJTIDExMsKwNTYnMzYuMSJF!5e0!3m2!1sid!2sid!4v1687077650416!5m2!1sid!2sid',
            'jam_buka' => '-',
            'harga_weekday' => 0,
            'harga_weekend' => 0,
            'kontak' => '-',
            'sosmed' => '-',
            'id_marker' => '3',
            'created_at' => '2023-06-18',
            'updated_at' => '2023-06-18'
        ]);

        DB::table('spaces')->insert([
            'id_category' => '4',
            'nama' => 'Topeng Panji',
            'foto' => 'TopengPanji.jpg',
            'deskripsi' => 'Topeng Malang telah ada sejak zaman kerajaan, pada masa lalu pertunjukan wayang topeng hanya bisa ditonton oleh orang-orang tertentu saja.',
            'alamat' => 'Kecamatan Pakisaji - Desa Karangpandan',
            'titik_koordinat' => '-8.073145199354178, 112.58922583880182',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3950.2775851803467!2d112.58665087376666!3d-8.073145191954877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMDQnMjMuMyJTIDExMsKwMzUnMjEuMiJF!5e0!3m2!1sid!2sid!4v1687077754398!5m2!1sid!2sid',
            'jam_buka' => '-',
            'harga_weekday' => 0,
            'harga_weekend' => 0,
            'kontak' => '-',
            'sosmed' => '-',
            'id_marker' => '4',
            'created_at' => '2023-06-18',
            'updated_at' => '2023-06-18'
        ]);

        DB::table('spaces')->insert([
            'id_category' => '2',
            'nama' => 'Coban Sewu',
            'foto' => 'CobanSewu.jpg',
            'deskripsi' => 'Formasi yang utama berupa Wuni.',
            'alamat' => 'Kecamatan Ampelgading - Desa Sidorenggo',
            'titik_koordinat' => '-8.230194891956499, 112.91463817518326',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d15794.907592897927!2d112.89618408853791!3d-8.230194478953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMTMnNDguNyJTIDExMsKwNTQnNTIuNyJF!5e0!3m2!1sid!2sid!4v1687078196626!5m2!1sid!2sid',
            'jam_buka' => ' 06.00 - 17.00',
            'harga_weekday' => 10000,
            'harga_weekend' => 10000,
            'kontak' => '-',
            'sosmed' => '-',
            'id_marker' => '2',
            'created_at' => '2023-06-18',
            'updated_at' => '2023-06-18'
        ]);

        DB::table('spaces')->insert([
            'id_category' => '3',
            'nama' => 'Boonpring Andeman',
            'foto' => 'boonpring.jpg',
            'deskripsi' => 'Konservasi hutan bambu yang luasnya 24 hektare. Boon Pring dulunya berupa hutan bambu. Penduduk sekitar memanfaatkannya untuk membuat rumah dan kayu bakar di dapur. Sampai ada program konservasi dari pemerintah pada 1978, masyarakat kemudian bergotong royong membuat embung yang kini disebut telaga dengan kedalaman 2 sampai 3 meter.',
            'alamat' => 'Kecamatan Turen - Desa Sanankerto',
            'titik_koordinat' => '-8.155393165245354, 112.76284611049516',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3949.469178542573!2d112.76027117376786!3d-8.155393191875117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMDknMTkuNCJTIDExMsKwNDUnNDYuMyJF!5e0!3m2!1sid!2sid!4v1687078256868!5m2!1sid!2sid',
            'jam_buka' => '08.00 - 17.00',
            'harga_weekday' => 5000,
            'harga_weekend' => 10000,
            'kontak' => '-',
            'sosmed' => '-',
            'id_marker' => '3',
            'created_at' => '2023-06-18',
            'updated_at' => '2023-06-18'
        ]);

        DB::table('spaces')->insert([
            'id_category' => '4',
            'nama' => 'Arca Ganapati Karangkates',
            'foto' => 'ArcaGanapati.jpg',
            'deskripsi' => 'Arca Ganesha ini terbilang langka dan istimewa. Jika biasanya arca Ganesha dalam posisi duduk, arca di desa itu dalam posisi berdiri.',
            'alamat' => 'Kecamatan Sumberpucung - Desa Karangkates',
            'titik_koordinat' => '-8.152832563468522, 112.4435681792791',
            'link_maps' => 'https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3949.4944691523333!2d112.4409932737677!3d-8.152832591877594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMDknMTAuMiJTIDExMsKwMjYnMzYuOSJF!5e0!3m2!1sid!2sid!4v1687078334090!5m2!1sid!2sid',
            'jam_buka' => '	08.00-16.00',
            'harga_weekday' => 0,
            'harga_weekend' => 0,
            'kontak' => '082123521239',
            'sosmed' => '-',
            'id_marker' => '4',
            'created_at' => '2023-06-18',
            'updated_at' => '2023-06-18'
        ]);
    }
}
