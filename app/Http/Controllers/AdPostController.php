<?php

namespace App\Http\Controllers;

use App\Models\AdModel;
use App\Models\AdPost;
use App\Models\AdPostImage;
use App\Models\Category;
use Illuminate\Http\Request;

class AdPostController extends Controller
{

    public function adminIndex(){

        $data['page_slug'] = 'ad-post';
        $data['post'] = AdPost::get();
        return view('panel.adpost.index' , $data);
    }

    public function index(){

        $data['page_slug'] = request()->route()->uri();
        $data['category'] = Category::get();
        $data['models'] = AdModel::get();
        $data['post'] = AdPost::get();
        return view('panel.adpost.index' , $data);
    }

    public function create(){
        $data['page_slug'] = 'ad-post';
        $data['category'] = Category::get();
        $data['models'] = AdModel::get();
        return view('panel.adpost.edit' , $data);
    }

    public function store(Request $request){

        if($request->file('company_logo')){
            $file= $request->file('company_logo');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/company/logo'), $filename);
            $compnay_logo = $filename;
        }

        $adpost = AdPost::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category,
            'model_id' => $request->model,
            'title' => $request->title,
            'city' => $request->city,
            'area_name' => $request->area_name,
            'type' => $request->type,
            'description' => $request->description,
            'company_name' => $request->company_name,
            'compnay_logo' => $compnay_logo,
        ]);
        if($adpost){

            if($request->file('images')){
                foreach ($request->images as $imagefile) {
                    $file= $imagefile;
                    $filename= $file->getClientOriginalName();
                    $file-> move(public_path('public/adpost/images'), $filename);
                    $images = $filename;
                    $adpostImages = AdPostImage::create([
                        'post_id' => $adpost->id,
                        'images' => $images
                    ]);
                }
                return redirect('/ad-post')->with(['success' => 'Post is successfully created']);
            }

        }
    }

    public function edit($id){

        $data = Category::where('id',$id)->first();
        return response()->json($data);
    }

    public function update(Request $request){
        $category = Category::where('id',$request->id)->update([
            'name' => $request->name,
            'status' => $request->status
        ]);
        if($category){
            return redirect()->back();
        }
    }
}
