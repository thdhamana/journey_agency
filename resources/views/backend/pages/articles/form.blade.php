@yield('backend.home')

@section('title', $article->exists ? "Editer un article" : "Ajouter un nouveau article")

@section('content')
    <div class="card m-4">
        <div class="card-body col-10 m-auto">
            <h3 class="page-title text-center f-400 fs-3">@yield('title')</h3>
            <form class="vstack  gap-2" action="{{ route($article->exists ? 'admin.article.update': 'admin.article.store', $article) }}" method="post" enctype="multipart/form-data">

                @method($article->exists ? 'put' : 'post')
                @csrf

                <div class="form-floating">
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="floatingtitle" placeholder="Le title" value="{{old('title', $article->title)}}">
                    <label for="floatingtitle">title</label>
                    <div class="invalid-feedback">@error('title') {{ $message }} @enderror</div>
                </div>
            </form>
        </div>
    </div>
@endsection