<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\CategoryMustahik;
use Illuminate\Http\Request;

class CategoryMustahikController extends Controller
{
    public function category_mustahik(){

        $data = CategoryMustahik::all();
        return view('datacategorymustahik', compact('data'));
    }

    public function tambahdatacategorymustahik(){

        $data = CategoryMustahik::all();
        return view('tambahdatacategorymustahik', compact('data'));
    }

    public function insertdatacategorymustahik(Request $request){

        //dd($request->all());
        CategoryMustahik::create($request->all());
        return redirect()->route('category-mustahik');
    }

    public function tampildatacategorymustahik($id){
        
        $data = CategoryMustahik::find($id);
        //dd($data);
        return view ('tampildatacategorymustahik', compact('data'));
    }

    public function editdatacategorymustahik(Request $request, $id){
        $data = CategoryMustahik::find($id);
        $data->update($request->all());
        return redirect()->route('category-mustahik');
    }

    public function deletedatacategorymustahik($id){
        $data = CategoryMustahik::find($id);
        $data->delete();
        return redirect()->route('category-mustahik');
    }
}

