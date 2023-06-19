<?php

namespace App\Http\Controllers;

use App\Models\CentrePoint;
use App\Models\Space;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        /**
         *  Pada method index kita mengambil single data dari tabel centrepoint
         *  Selanjutnya kita mengambil seluruh data dari tabel space untuk menampilkan marker yang akan
         *  kita gtampilkan pada view map.blade 
         */
        $centrePoint = CentrePoint::get()->first();
        $spaces = Space::get();
        return view('map2',[
            'spaces' => $spaces,
            'centrePoint' => $centrePoint
        ]);
        //return dd($spaces);
    }

    public function show($nama)
    {
        /**
         * Hampir sama dengam method index diatas
         * tapi disini kita hanya akan menampilkan single data saja untuk space
         * yang kita pilih pada view map dan selanjutnya kita akan di arahkan 
         * ke halaman detail untuk melihat informasi lebih lengkap dari space
         * yang kita pilih
         */
        $centrePoint = CentrePoint::get()->first();
        $spaces = Space::where('nama',$nama)->first();
        return view('detail',[
            'centrePoint' => $centrePoint,
            'spaces' => $spaces
        ]);
    }
}