<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentrePoint;
use App\Models\Space;
use App\Models\EventModel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $geoheritage = Space::with('category')->where('id_category', '1')->count();
        $geodiversity = Space::with('category')->where('id_category', '2')->count();
        $biodiversity = Space::with('category')->where('id_category', '3')->count();
        $culturaldiversity = Space::with('category')->where('id_category', '4')->count();
        $centrePoint = CentrePoint::get()->first();
        $spaces = Space::get();
        return view('dashboard',[
            'spaces' => $spaces,
            'centrePoint' => $centrePoint
        ], compact('geoheritage', 'geodiversity', 'biodiversity', 'culturaldiversity'));
    }
    }
