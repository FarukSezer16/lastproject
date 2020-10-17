<?php

namespace App\Http\Controllers;

use App\Helpers\UploadPaths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\News;

class GameController extends Controller
{
    public function newsCreateView()
    {
        return view('news.create');
    }
    public function newsCreate(Request $request)
    {
        $title = $request->get('news_title');
        $content = $request->get('news_content');
        $category=$request->get('kategori');
        $filePhotoUrl = $request->file('photo');
        if (isset($filePhotoUrl)) {
            $productPhotoName = uniqid('product_') . '.' . $filePhotoUrl->getClientOriginalExtension();
            $filePhotoUrl->move(UploadPaths::getUploadPath('product_photos'), $productPhotoName);
        }
        News::create([
            'news_title' => $title,
            'kategori'=> $category,
            'news_content' => $content,
            'photo' => $productPhotoName,
        ]);
        return back();
    }
    public function newsView($category)
    {
        $contents=News::where('kategori', '=', $category)->get();
        return view('news.newsView', compact('contents'));

    }
    public function news_View($category)
    {
        $contents=News::where('kategori', '=', $category)->get();
        return view('admin.tablo', compact('contents'));

    }
}
