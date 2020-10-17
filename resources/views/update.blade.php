@extends('layouts.admin-master')
@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Güncelleme </h4>
            <div class="form-panel">
                <div class=" form">
                    <form class="cmxform form-horizontal style-form" method="post" action="/update/{{$new->id}}">
                        <div class="form-group "><br>
                            <center>  <label for="name" class="control-label col-lg-2"><br>Title Değiştir</label> </center>
                            <div class="col-lg-10"> <br>
                                <center>  <input class=" form-control" id="news_title" name="news_title" value="{{$new->news_title}}" minlength="2"
                                                 type="text" required/></center>
                            </div>
                        </div>
                        <div class="form-group "><br>
                            <center>  <label for="name" class="control-label col-lg-2"><br>kategori değiştir</label> </center>
                            <div class="col-lg-10"> <br>
                                <center>  <input class=" form-control" id="kategori" name="kategori" value="{{$new->kategori}}" minlength="2"
                                                 type="text" required/></center>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-2">Içerık</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="news_content" type="text" name="news_content"
                                       value="{{$new->news_content}}"
                                       required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                @csrf
                                <button class="btn btn-theme" type="submit">Save</button>
                                <button class="btn btn-theme04" type="button" onclick="location.href='admin-tablo'">Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
    </div>
@endsection
