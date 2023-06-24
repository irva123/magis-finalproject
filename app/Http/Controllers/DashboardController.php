<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CentrePoint;
use App\Models\Space;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        $centrePoint = CentrePoint::get()->first();
        $spaces = Space::where('nama',$nama)->first();
        return view('detail',[
            'centrePoint' => $centrePoint,
            'spaces' => $spaces
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
