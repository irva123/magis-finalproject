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

class GeodiversityController extends Controller
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

        $spaces = Space::with('category')->where('id_category', '2')->get();
        return view('geodiversity.index', ['spaces'=>$spaces])->with('i', ($request->input('page',1)-1)* $pagination);

        // $spaces = Space::with('category')->get();
        // return view('geodiversity.index', ['spaces'=>$spaces]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryModel::all();
        return view('geodiversity.create',['marker'=> MarkerModel::all()], compact('category'));

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
        return redirect('/geodiversity') ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Space $geodiversity)
    {
        return view('geodiversity.detail', compact('geodiversity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Space $geodiversity)
    {
        $marker = MarkerModel::get();
        $category = CategoryModel::get();
        return view('geodiversity.edit', compact(['marker', 'geodiversity']), compact(['category', 'geodiversity']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGeoparkRequest $request, Space $geodiversity)
    {
        $data=$request->all();
        $file = $request->file('foto');

        $nama_file = time().'_'.$file->getClientOriginalName();
        $tujuan_upload = 'storage';
        $file->move($tujuan_upload,$nama_file);
        $data['foto'] = $nama_file;
        $geodiversity->update($data);
        return redirect()->route('geodiversity.index')->with('success', 'data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Space $geodiversity)
    {
        $geodiversity->delete($geodiversity->id);
        return redirect()->route('geodiversity.index')->with('success', 'data berhasil dihapus!');
    }

    public function createPDF(Request $request){
        //$spaces = Space::all();
        $pagination = 10;
        $spaces = Space::OrderBy('created_at', 'desc')-> paginate($pagination);
        $spaces = Space::with('category')->where('id_category', '2')->get();
        $pdf = PDF::loadView('geodiversity.templatePDF', compact('spaces'))->setPaper('a4', 'landscape');
        return $pdf->download('Data_geodiversity.pdf');

    }
    
}
