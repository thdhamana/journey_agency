@extends('backend.home')

@section('title', 'This page displays the details of the university')

@section('content')
    <div class="row text-center"><h3>@yield('title')</h3></div>
    <div class="card m-4">
        <div class="card-body col-lg-11 m-auto">
            <div class="row py-2">
                <div class="col-8">
                    <h5>University / Institute name : {{ $university->name }} </h5>
                </div>
                <div class="col-4 text-end">
                    <h6>Country : {{$university->country}} </h6>
                </div>
            </div>
            <div class="row show-article rounded-4 shadow img-fluid">
                <img src="{{asset('storage/'.$university->photo)}} " alt="" srcset="">
            </div>
            <div class="row py-2 fw-bold text-primary">
                 <div class="col-6 text-start">
                    <p>Email : {{$university->email}} </p>
                </div>
                 <div class="col-6 text-end">
                    <p>Web site link : {{$university->link}} </p>
                </div>
            </div>
            <div class="row">
                <p><strong>{{$university->description }}</strong></p>
            </div>
            <div class="row">
                <p>{{$university->content }} </p>
            </div>
        </div>
    </div>
@endsection
