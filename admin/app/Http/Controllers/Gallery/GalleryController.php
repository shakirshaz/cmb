<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\AddGalleryRequest;
use App\Http\Controllers\Controller as BaseController;

use Illuminate\Database\QueryException;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use App\Gallery\Category;

use App\Gallery\Gallery;

class GalleryController extends BaseController
{
    //
    public function index(){
        if(Auth::guest()){
            return redirect()->route('login');
        }else{
            return view('gallery.gallery',['success' => '','bgColor' => '']);
        }
    }

    public function addGallery(AddGalleryRequest $request){
        $categoryId = $request->input('category');

        $category = Category::find($categoryId)->category;

        $alt = $request->input('alt');
        $desc = $request->input('description');

        $imageName = $request->file('picture')->getClientOriginalName();
//to be saved in database
        $imagePath = 'adminUploads/gallery/'.$category."/".$imageName;


        $request->file('picture')->move(base_path().'Uploads/gallery/'.$category."/",$imageName);

        $uploaded = Gallery::create(['category' => $category,'image_path' => $imagePath,'description' => $desc,'alt' => $alt]);

        if($uploaded){
            return view('gallery.gallery',['success' => 'Successfully Gallery Updated !!! :)','bgColor' => 'green']);
        }else{
            return view('gallery.gallery',['success' => 'Sorry :( Error Occured !!!','bgColor' => 'red']);
        }


    }

    public function updateGallery(AddGalleryRequest $request){

        $id = $request->input('id');

        $gallery = Gallery::find($id);

        //assigning older data variables

        $category = $gallery->category;
        $image_path = $gallery->image_path;
        $desc = $gallery->description;
        $alt = $gallery->alt;

        if($request->input('cat_check') == null){
            $catId = $request->input('id');
            $category = Category::find($catId)->category;

        }
        if($request->input('desc_check') == null){
            $desc = $request->input('description');
        }
        if($request->input('alt_check') == null){
            $alt = $request->input('alt');
        }

        if($request->input('pic_check') != null){}
        else{
            $imageName = $request->file('picture')->getClientOriginalName();
//to be saved in database
            $image_path = 'adminUploads/gallery/'.$category.'/'.$imageName;


            $request->file('picture')->move(base_path().'Uploads/gallery/'.$category.'/',$imageName);
        }


        $updated = Gallery::where('id',$id)->update(['description' => $desc,'alt' => $alt,'image_path' => $image_path, 'category' => $category]);

        if($updated){
            return view('gallery.gallery',['success' => 'successfully updated :)','bgColor' => 'green']);
        }else{
            return view('gallery.gallery',['success' => 'Error updating  :(','bgColor' => 'red']);
        }



    }

    public function deleteGallery($id){
        $deleteGallery = Gallery::find($id);

        if (count($deleteGallery) > 0) {

            if ($deleteGallery->delete()) {
                return view('gallery.gallery', ['success' => 'Succesfully Deleted', 'bgColor' => 'green']);
            } else {
                return view('gallery.gallery', ['success' => 'Error Occured :( While Deleting', 'bgColor' => 'red']);
            }
        } else {
            return view('gallery.gallery', ['success' => 'Image\'s been already deleted :( !!!', 'bgColor' => 'red']);
        }
    }

    public function addCategory(AddCategoryRequest $request){

        $category = $request->input('category');

        try{
            Category::create(['category' => strtoupper($category)]);
            return view('gallery.gallery', ['success' => 'Succesfully Added Category', 'bgColor' => 'green']);
        }catch (QueryException $e){
            return view('gallery.gallery', ['success' => 'Error Occured :( Adding Category (Already Added)', 'bgColor' => 'red']);
        }
    }
}
