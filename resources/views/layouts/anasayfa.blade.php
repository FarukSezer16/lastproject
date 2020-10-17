@extends('layouts.user-master')
@section('content')

    @foreach($randoms as $random)
        <div class="post-entry-2 d-flex">
            <div class="thumbnail col-lg-2")><img src="{{asset('/uploads/news/').'/'.$random->photo}}" width="200"/> </div>
            <div class="contents">
                <h2><a>{{$random->news_title}}</a></h2>
                <p class="mb-3">{{$random->news_content}}</p>
                <div class="post-meta">
                    <span class="d-block"><a>{{$random->kategori}}</a> in <a>News</a></span>
                </div>
            </div>
        </div>
    @endforeach
@endsection
