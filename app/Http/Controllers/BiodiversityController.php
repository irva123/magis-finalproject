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

class BiodiversityController extends Controller
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

        $spaces = Space::with('category')->where('id_category', '3')->get();
        $category = CategoryModel::get();
        return view('biodiversity.index', ['spaces'=>$spaces, 'category'=>$category])->with('i', ($request->input('page',1)-1)* $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryModel::all();
        return view('biodiversity.create',['marker'=> MarkerModel::all()], compact('category'));
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
        return redirect('/biodiversity') ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Space $biodiversity)
    {
        return view('biodiversity.detail', compact('biodiversity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Space $biodiversity)
    {
        $marker = MarkerModel::get();
        $category = CategoryModel::get();
        return view('biodiversity.edit', compact(['marker', 'biodiversity']), compact(['category', 'biodiversity']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGeoparkRequest $request, Space $biodiversity)
    {
        $data=$request->all();
        $file = $request->file('foto');

        $nama_file = time().'_'.$file->getClientOriginalName();
        $tujuan_upload = 'storage';
        $file->move($tujuan_upload,$nama_file);
        $data['foto'] = $nama_file;
        $biodiversity->update($data);
        return redirect()->route('biodiversity.index')->with('success', 'data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Space $biodiversity)
    {
        $biodiversity->delete($biodiversity->id);
        return redirect()->route('biodiversity.index')->with('success', 'data berhasil dihapus!');
    }

    public function createPDF(){
        $spaces = Space::with('category')->where('id_category', '3')->get();
        $pdf = PDF::loadView('biodiversity.templatePDF', compact('spaces'))->setPaper('a4', 'landscape');
        return $pdf->download('Data_biodiversity.pdf');

    }
}
