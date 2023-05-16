<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Mustahik;

class MustahikController extends Controller
{
    public function index(){

        $data = Mustahik::all();
        return view('datamustahik',compact('data'));
    }

    public function tambahdatamustahik(){
        return view('tambahdatamustahik');
    }

    public function insertdatamustahik(Request $request){
        //dd($request->all());
        Mustahik::create($request->all());
        return redirect()->route('mustahik'); 
    }

    public function tampildatamustahik($id){
        
        $data = Mustahik::find($id);
        //dd($data);
        return view ('tampildatamustahik', compact('data'));
    }

    public function editdatamustahik(Request $request, $id){
        $data = Mustahik::find($id);
        $data->update($request->all());
        return redirect()->route('mustahik');
    }

    public function hapusdatamustahik($id){
        $data = Mustahik::find($id);
        $data->delete();
        return redirect()->route('mustahik');
    }
}
