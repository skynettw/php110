<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Video;

class VideoController extends Controller
{
    public function index() {
        $data = Video::all();
        return view("index", compact("data"));
    }

    public function show($id) {
        
        $target = Video::find($id);
        $vid = $target->vid;
        return view("show", compact("vid"));
    }

    public function add(Request $req) {
        $video = new Video;
        $video->title = $req->title;
        $video->vid = $req->vid;
        $video->save();
        return redirect("/");
    }

    public function delete($id) {
        Video::destroy($id);
        // Video::where("id", $id)->delete();
        return redirect("/");
    }
}
