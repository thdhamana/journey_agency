@extends('backend.home')

@section('title', $article->exists ? "Changing the article" : "Adding a new article")

@section('content')
    <div class="card m-4">
        <div class="card-body col-lg-10 m-auto">
            <h3 class="page-title text-center f-400 fs-3">@yield('title')</h3>
            <form class="vstack  gap-2" action="{{ route($article->exists ? 'admin.article.update': 'admin.article.store', $article) }}" method="post" enctype="multipart/form-data">

                @method($article->exists ? 'put' : 'post')
                @csrf

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <div class="form-floating">
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="floatingtitle" placeholder="Le title" value="{{old('title', $article->title)}}">
                            <label for="floatingtitle">Article title here</label>
                            <div class="invalid-feedback">@error('title') {{ $message }} @enderror</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                        <div class="form-floating">
                            <input class="form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="floatingphoto" placeholder="photo" value="{{old('photo', $article->photo)}}">
                            <label for="floatingphoto">Photo</label>
                            <div class="invalid-feedback">@error('photo') {{ $message }} @enderror</div>
                        </div>
                    </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="floatingdescription" placeholder="Nom du description"> {{old('description', $article->description)}}</textarea>
                    <label for="floatingdescription">Article description here</label>
                    <div class="invalid-feedback">@error('description') {{ $message }} @enderror</div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control @error('content') is-invalid @enderror" type="text" name="content" id="floatingcontent" placeholder="Nom du content"> {{old('content', $article->content)}}</textarea>
                    <label for="floatingcontent">Article content here</label>
                    <div class="invalid-feedback">@error('content') {{ $message }} @enderror</div>
                </div>

                <button type="submit" class="btn btn-primary ">
                    @if($article->id) Update article                       
                    @else Create article @endif
                </button>
            </form>
        </div>
    </div>
@endsection