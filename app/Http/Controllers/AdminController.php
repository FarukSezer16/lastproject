<?php

namespace App\Http\Controllers;
use App\Blog;
use App\News;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminindex()
    {
        return view('layouts.admin-master');
    }
    public function tabloindex()
    {
        return view('admin.tablo');
    }
    public function textadd()
    {
        $contents=DB::table('news')->where('deleted_at','=',null)->get();
        return view('admin.tablo', compact('contents'));
    }
    public function updateView($id)
    {
        $new=Db::table('news')->where('id',$id)->get();
        $new=$new->first();
        return view('update' , compact('new'));
    }

    public function update(Request $Request,$id)
    {
        DB::table('news')->where('id' , $id)->update([
            'kategori' => $Request->get('kategori'),
            'news_title' => $Request->get('news_title'),
            'news_content' => $Request->get('news_content'),
            'updated_at' => Carbon::now(),
        ]);
        return "<script>alert('KAYIT GÜNCELLENDİ')</script>";
    }
    public function delete($id)
    {
        DB::table('news')->where('id','=', $id)->update(['deleted_at' => Carbon::now()]);
        return back();


    }
}
