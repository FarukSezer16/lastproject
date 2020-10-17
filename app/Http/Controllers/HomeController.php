<?php

namespace App\Http\Controllers;

use App\News;
use Blogs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userindex()
    {
        $randoms = News::all()->random(20);
        return view('layouts.anasayfa',compact('randoms'));
    }
    public function index()
    {
        return view('home');
    }


}
