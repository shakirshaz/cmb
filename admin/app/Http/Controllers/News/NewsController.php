<?php

namespace App\Http\Controllers\News;

use App\Http\Requests\newsRequest;
use App\News\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    //
    public function index()
    {
        if(Auth::guest()){
            return redirect()->route('login');
        }else{
            return view('news.news',['success' => '','bgColor' => '']);
        }
    }

    public function addNews(NewsRequest $request)
    {


            $title = $request->input('title');
            $subtitle = $request->input('subtitle');
            $content = $request->input('content');
            $names_concerned = $request->input('names_concerned');


            $imageName = $request->file('picture')->getClientOriginalName();
//to be saved in database
            $imagePath = 'adminUploads/news/'.$imageName;


            $request->file('picture')->move(base_path().'Uploads/news/',$imageName);


            $date_posted = date('Y/M/D');

            $added = News::create(['title' => $title, 'subtitle' => $subtitle,'content' => $content,'names_concerned' => $names_concerned,'image_path' => $imagePath,'posted_on' => $date_posted]);

            if($added){
                return view('news.news',['success' => 'Succesfully Added:)','bgColor' => 'green']);
            }else{
                return view('news.news',['success' => 'Error :(','bgColor' => 'red ']);
            }
    }



    public function deleteNews($id)
    {
        $deleteNews = News::find($id);

        if (count($deleteNews) > 0) {

            if ($deleteNews->delete()) {
                return view('news.news', ['success' => 'Succesfully Deleted', 'bgColor' => 'green']);
            } else {
                return view('news.news', ['success' => 'Error Occured :( While Deleting', 'bgColor' => 'red']);
            }
        } else {
            return view('news.news', ['success' => 'News\'s been already deleted :( !!!', 'bgColor' => 'red']);
        }
    }
    public function updateNews(NewsRequest $r)
{

    $id = $r->input('id') + 1;

    $news = News::find($id);

    //assigning older data variables

    $title = $news->title;
    $subtitle = $news->subtitle;
    $content = $news->content;
    $names_concerned = $news->names_concerned;
    $image_path = $news->image_path;

    if ($r->input('t_check') == null) {
        $title = $r->input('title');
    }
    if ($r->input('st_check') == null) {
        $subtitle = $r->input('subtitle');
    }
    if ($r->input('c_check') == null) {
        $content = $r->input('content');
    }
    if ($r->input('nc_check') == null) {
        $names_concerned = $r->input('names_concerned');
    }
    if ($r->input('p_check') != null) {
    } else {
        $imageName = $r->file('picture')->getClientOriginalName();
//to be saved in database
        $image_path = 'adminUploads/news/' . $imageName;


        $r->file('picture')->move(base_path() . 'Uploads/news/', $imageName);
    }


    $updated = News::where('id', $id)->update(['title' => $title, 'subtitle' => $subtitle, 'content' => $content, 'names_concerned' => $names_concerned, 'image_path' => $image_path, 'posted_on' => date("Y/M/D")]);

    if ($updated) {
        return view('news.news', ['success' => 'successfully updated :)', 'bgColor' => 'green']);
    } else {
        return view('news.news', ['success' => 'Error updating  :(', 'bgColor' => 'red']);
    }


}


}
