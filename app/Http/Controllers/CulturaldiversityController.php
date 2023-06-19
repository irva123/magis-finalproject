<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\MarkerModel;
use App\Models\CategoryModel;
use PDF;

class CulturaldiversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spaces = Space::with('category')->where('id_category', 'GP04')->get();
        $category = CategoryModel::get();
        return view('cultural-diversity.index', ['spaces'=>$spaces, 'category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cultural-diversity.create',['marker'=> MarkerModel::all()]);
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
        return view('cultural-diversity.detail', compact('cultural-diversity'));
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
        return view('cultural-diversity.edit', compact(['marker', 'cultural-diversity']));
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
        $culturaldiversity->delete($cultualdiversity->id);
        return redirect()->route('cultural-diversity.index')->with('success', 'data berhasil dihapus!');
    }

    public function createPDF(){
        $geodiversity = Space::all();
        $pdf = PDF::loadView('cultural-diversity.templatePDF', compact('culturaliversity'));
        return $pdf->download('Data_cultural-diversity.pdf');

    }
}
