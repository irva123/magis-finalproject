<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Space;
use App\Models\MarkerModel;
use App\Models\CategoryModel;
use App\Http\Requests\StoreGeoparkRequest;
use App\Http\Requests\UpdateGeoparkRequest;
use PDF;

class GeoheritageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 10;
        $spaces = Space::OrderBy('created_at', 'desc')-> paginate($pagination);

        $spaces = Space::with('category')->where('id_category', '1')->get();
        return view('geoheritage.index', ['spaces'=>$spaces])->with('i', ($request->input('page',1)-1)* $pagination);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryModel::all();
        return view('geoheritage.create',['marker'=> MarkerModel::all()], compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGeoparkRequest $request)
    {
        $data=$request->all();

        $file = $request->file('foto');

        $nama_file = time().'_'.$file->getClientOriginalName();
        $tujuan_upload = 'storage';
        $file->move($tujuan_upload,$nama_file);
        $data['foto'] = $nama_file;

        //add data 
        Space::create($data); 
 
        // if true, redirect to index 
        return redirect('/geoheritage') ->with('success', 'Add data success!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Space $geoheritage)
    {
        return view('geoheritage.detail', compact('geoheritage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Space $geoheritage)
    {
        $marker = MarkerModel::get();
        $category = CategoryModel::get();
        return view('geoheritage.edit', compact(['marker', 'geoheritage']), compact(['category', 'geoheritage']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGeoparkRequest $request, Space $geoheritage)
    {
        $data=$request->all();
        $file = $request->file('foto');

        $nama_file = time().'_'.$file->getClientOriginalName();
        $tujuan_upload = 'storage';
        $file->move($tujuan_upload,$nama_file);
        $data['foto'] = $nama_file;
        $geoheritage->update($data);
        return redirect()->route('geoheritage.index')->with('success', 'data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Space $geoheritage)
    {
        $geoheritage->delete($geoheritage->id);
        return redirect()->route('geoheritage.index')->with('success', 'data berhasil dihapus!');
    }

    public function createPDF(Request $request){
        //$spaces = Space::all();
        $pagination = 10;
        $spaces = Space::OrderBy('created_at', 'desc')-> paginate($pagination);
        $spaces = Space::with('category')->where('id_category', '1')->get();
        $pdf = PDF::loadView('geoheritage.templatePDF', compact('spaces'))->setPaper('a4', 'landscape');
        return $pdf->download('Data_geoheritage.pdf');

    }
}
