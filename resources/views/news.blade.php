@extends('layouts')
@section('main')
    <!-- banner -->
    <div class="banner1">
        <h3>新闻中心</h3>
    </div>
    <div class="about">
        <div class="container">
            <div class="agileinfo_about_grids">
                @foreach($articles as $key => $article)
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{env('APP_URL')}}{{$article->thumb}}" class="img-rounded" width="180px">
                    </div>
                    <div class="col-md-8">
                        <div class="wthree_about_grid">
                            <h3>{{$article->title}}</h3>
                            <p>{{$article->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"> </div>
                {{$articles->links()}}
            </div>
        </div>
    </div>
@endsection