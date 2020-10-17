@extends('layouts.admin-master')
@section('content')
    <br><br><br><br>
    <table class="table table-data2">
        <thead>
        <tr>
            <th>
                <label class="au-checkbox">
                    <input type="checkbox">

                </label>
            </th>
            <th>Başlık</th>
            <th>Metin</th>
            <th>Fotoğraf</th>
            <th>Tarih</th>
            <th></th>
            <th>Güncelle</th>
            <th>Sil</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($contents as $content)
            <tr>
                <td></td>
                <td>{{$content->news_title}}</td>
                <td>{{$content->news_content}}</td>
                <td><img src="{{asset('/uploads/news/').'/'.$content->photo}}" width="100px;"/> </td>
                <td>{{$content->updated_at}}</td>
                <td>
                <td>
                    <button class="btn btn-primary"><i class="fa fa-lightbulb-o" onclick="location.href='update/{{$content->id}}'"> Güncelle </i></button>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-star" onclick="location.href='/delete/{{$content->id}}'">Sil</i></button>

                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
@endsection


