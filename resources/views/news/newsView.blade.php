@extends('layouts.user-master')
@section('content')

@foreach($contents as $content)
    <div class="post-entry-3 d-flex">
        <div class="thumbnail col-lg-2")><img src="{{asset('/uploads/news/').'/'.$content->photo}}" width="200"/> </div>
        <div class="contents">
            <h3><a>{{$content->news_title}}</a></h3>
            <p class="mb-2">{{$content->news_content}}</p>
            <div class="post-meta">
                <span class="d-block"><a>{{$content->kategori}}</a> in <a>News</a></span>
                <br> <br>
            </div>
        </div>
    </div>
@endforeach
@endsection
