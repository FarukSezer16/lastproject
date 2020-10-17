<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BlogController extends Controller
{
    public function blogView()
    {
        return view('blog.blog');
    }
    public function blog(Request $request){
        $blog = $request->user()->blog()->create([
            'title' => $request->get('title'),
            'text' => $request->get('text'),
        ]);
        return 'Başarıyla kayıt edildi.';
    }
    public function news(){
        $news = Blog::all();

        return view('blog.news', compact('news'));
    }
    public function text()
    {
    return view('blog.text');
    }
}
