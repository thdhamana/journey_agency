@extends('backend.home')

@section('title', 'Articles')

@section('content')
    <div class="d-flex flex-row justify-content-between m-1">
        <div><h3 class="page-title justify-start fs-2">@yield('title')</h3></div>
        <div>
            <a class="btn btn-primary" href="{{ route('admin.article.create')}}">Add a new article</a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h2 class="text-center">List of articles</h2>
            <div class="table-responsive-sm">
                <table class="table table-hover table-centered table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</td>
                            <th>Content</th>
                            <th>Photo</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($articles as $k => $article)
                        <tr>
                            <td>{{$k+1}} </td>
                            <td>{{$article->title}} </td>
                            <td>{{ substr($article->description, 0, 10)}}... </td>
                            <td>{{ substr($article->content, 0, 10)}}... </td>
                            <td><img width="20px" height="20px" src="{{asset('storage/'.$article->photo)}}" alt="" srcset=""> </td>
                            <td class="d-flex gap-1 justify-content-end ">
                                <a href="{{ route('admin.article.show', $article) }}" class="btn btn-secondary p-1 py-lg-0 py-0 p-lg-1 fs-4"><i class="fa-regular fa-eye"></i></a>
                                <a href="{{ route('admin.article.edit', $article) }}" class="btn btn-info p-1 py-lg-0 py-0 p-lg-1 fs-4"><i class="fa-regular fa-pen-to-square"></i></a>
                                
                                <!-- Bouton pour déclencher le modal de confirmation -->
                                <button type="button" class="btn btn-danger p-1 py-0 fs-4" data-bs-toggle="modal" data-bs-target="#confirmationModal{{$k}}">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <!-- Modale de confirmation -->
                                <div class="modal fade" id="confirmationModal{{$k}}" tabindex="-1" aria-labelledby="confirmationModalLabel{{$k}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmationModalLabel{{$k}}">Confirmation de suppression</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body d-flex flex-column align-items-center">
                                                <div class="m-3"><img src="{{asset('backend/img/R.gif')}}" alt="" width="100px" height="100px"></div>
                                                <h4>Êtes-vous sûr de vouloir supprimer cet article ?</h4>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>

                                                <!-- Formulaire de suppression -->
                                                <form action="{{ route('admin.article.destroy', $article)}}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Oui</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-12">
                    <ul class="pagination-rounded">
                        {{$articles->links()}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
   