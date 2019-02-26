<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;

class LinksBannerController extends Controller
{
    public function index($id){
        $banner = Banner::findOrFail($id);
        return view('links/link')->with('banner', $banner);
    }
}
