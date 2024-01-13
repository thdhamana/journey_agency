@extends('backend.home')

@section('title', 'This page displays the details of the article')

@section('content')
    <div class="row text-center"><h3>@yield('title')</h3></div>
    <div class="card m-4">
        <div class="card-body col-lg-11 m-auto">
            <div class="row">
                <h4>{{ $article->title }} </h4>
            </div>
            <div class="row show-article rounded-4 shadow img-fluid">
                <img src="{{asset('storage/'.$article->photo)}} " alt="" srcset="">
            </div>
            <div class="row p-1 fw-bold text-primary">
                <div class="col-6 text-start">
                    <p>By {{ Auth::user()->name}} </p>
                </div>
                 <div class="col-6 text-end">
                    <p>publish in {{$article->created_at}} </p>
                </div>
            </div>
            <div class="row">
                <p><strong>{{$article->description }}</strong></p>
            </div>
            <div class="row">
                <p>{{$article->content }} </p>
            </div>
        </div>
    </div>
@endsection
