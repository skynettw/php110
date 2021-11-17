<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index() {
        return "<h2>index from VideoController</h2>";
    }

    public function show($id) {
        
        return "Your video id is $id!";
    }
}
