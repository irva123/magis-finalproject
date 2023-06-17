<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\MarkerModel;
use App\Models\CategoryModel;
use PDF;

class GeodiversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spaces = Space::with('category')->where('id_category', 'GP02')->get();
        $category = CategoryModel::get();
        return view('geodiversity.index', ['spaces'=>$spaces, 'category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('geodiversity.create',['marker'=> MarkerModel::all()]);
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
    public function show($id)
    {
        return view('geodiversity.detail', compact('geodiversity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marker = MarkerModel::get();
        return view('geodiversity.edit', compact(['marker', 'geodiversity']));
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
        $geodiversity->delete($geodiversity->id);
        return redirect()->route('geodiversity.index')->with('success', 'data berhasil dihapus!');
    }

    public function createPDF(){
        $geodiversity = Space::all();
        $pdf = PDF::loadView('geodiversity.templatePDF', compact('geodiversity'));
        return $pdf->download('Data_geodiversity.pdf');

    }
    
}
