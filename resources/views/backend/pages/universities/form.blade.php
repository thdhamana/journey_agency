@extends('backend.home')

@section('title', $university->exists ? "Changing the university" : "Adding a new university")

@section('content')
    <div class="card m-4">
        <div class="card-body col-lg-10 m-auto">
            <h3 class="page-title text-center f-400 fs-3">@yield('title')</h3>
            <form class="vstack  gap-2" action="{{ route($university->exists ? 'admin.university.update': 'admin.university.store', $university) }}" method="post" enctype="multipart/form-data">

                @method($university->exists ? 'put' : 'post')
                @csrf

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <div class="form-floating">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="floatingname" placeholder="Le name" value="{{old('name', $university->name)}}">
                            <label for="floatingname">University name here</label>
                            <div class="invalid-feedback">@error('name') {{ $message }} @enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <div class="form-floating">
                            <input class="form-control @error('link') is-invalid @enderror" type="link" name="link" id="floatinglink" placeholder="Nom du link" value="{{old('link', $university->link)}}">
                            <label for="floatinglink">University link here</label>
                            <div class="invalid-feedback">@error('link') {{ $message }} @enderror</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <div class="form-floating">
                            <input class="form-control @error('country') is-invalid @enderror" type="text" name="country" id="floatingCountry" placeholder="Nom du country" value="{{old('country', $university->country)}}">
                            <label for="floatingCountry">Country</label>
                            <div class="invalid-feedback">@error('country') {{ $message }} @enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <div class="form-floating">
                            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="floatingphoto" placeholder="photo" value="{{old('photo', $university->photo)}}">
                            <label for="floatingphoto">Photo</label>
                            <div class="invalid-feedback">@error('photo') {{ $message }} @enderror</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                         <div class="form-floating">
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="floatingInput" placeholder="diallo@gmail.com" value="{{old('email', $university->email)}}">
                            <label for="floatingInput">Email address</label>
                            <div class="invalid-feedback">@error('email') {{ $message }} @enderror</div>
                        </div>                
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                         <div class="form-floating">
                            <textarea class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="floatingdescription" placeholder="Nom du description"> {{old('description', $university->description)}}</textarea>
                            <label for="floatingdescription">University description here</label>
                            <div class="invalid-feedback">@error('description') {{ $message }} @enderror</div>
                        </div>
                    </div>
                </div>
               
                <div class="form-floating">
                    <textarea class="form-control @error('content') is-invalid @enderror" type="text" name="content" id="floatingcontent" placeholder="Nom du content"> {{old('content', $university->content)}}</textarea>
                    <label for="floatingcontent">University content here</label>
                    <div class="invalid-feedback">@error('content') {{ $message }} @enderror</div>
                </div>

                <button type="submit" class="btn btn-primary ">
                    @if($university->id) Update university                       
                    @else Create university @endif
                </button>
            </form>
        </div>
    </div>
@endsection