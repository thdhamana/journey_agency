@extends('backend.home')

@section('content')
    <div class="d-flex flex-row justify-content-between mt-3">
        <div><h3 class="page-title justify-start fs-2">@yield('title')</h3></div>
        <div>
            <a href="{{ route('admin.article.create')}}">Add a new article</a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h2>List of articles</h2>
            <div class="table-responsive-sm">
                <table class="table table-hover table-centered table-bordered mb-0">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Title</td>
                            <td>Description</td>
                            <td>Content</td>
                            <td>Photo</td>
                            <td class="text-end">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($articles as $k => $article)
                        <tr>
                            <td>{{$k+1}} </td>
                            <td>{{$article->title}} </td>
                            <td>{{$article->description}} </td>
                            <td>{{ substr($article->content, 0, 10)}}... </td>
                            <td><img width="20px" height="20px" src="{{asset('storage/'$article->photo)}}" alt="" srcset=""> </td>
                            <td class="d-flex gap-1 justify-content-end ">
                                <a href="{{ route('admin.article.edit', $article) }}" class="btn btn-info p-1 py-lg-0 py-0 p-lg-1 fs-4"><i class="fa-regular fa-pen-to-square"></i></a>
                                <form action="{{ route('admin.article.destroy', $article)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger p-1 py-0 fs-4"><i class="fa fa-trash"></i></button>
                                </form>
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