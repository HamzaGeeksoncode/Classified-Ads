<?php

namespace App\Http\Controllers;

use App\Models\AdModel;
use Illuminate\Http\Request;

class AdModelController extends Controller
{
    public function index(){

        $data['page_slug'] = request()->route()->uri();
        $data['models'] = AdModel::orderBy('id','desc')->get();
        return view('panel.AdsModel.index' , $data);
    }

    public function store(Request $request){

        $models = AdModel::create([
            'name' => $request->name,
            'status' => $request->status
        ]);
        if($models){
            return redirect()->back();
        }
    }

    public function edit($id){

        $data = AdModel::where('id',$id)->first();
        return response()->json($data);
    }

    public function update(Request $request){
        $models = AdModel::where('id',$request->id)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);
        if($models){
            return redirect()->back();
        }
    }
}
