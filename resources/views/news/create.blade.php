@extends('layouts.admin-master')
@section('content')
    <br> <br>
    <div class="main-content">
        <div class="sectioncontent sectioncontent--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <strong>Haber Ekle </strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('news.create')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleName">Haber Başlığı</label>
                                    <input type="text" name="news_title"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Kategori</label>
                                    <select type="text" name="kategori"  class="form-control">
                                        <option>Seçiniz.</option>
                                    <option>pc-oyun</option>
                                        <option>konsol-oyun</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Haber Içeriği</label>
                                    <textarea type="text" name="news_content" class="form-control"> </textarea>
                                </div>
                                @csrf
                                <input type="file" name="photo" class="form-control">
                                <input type="submit" class="btn btn-block btn-input au-btn--blue" value="Yükle"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
