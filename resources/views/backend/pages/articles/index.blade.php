@extends('backend.home')

@section('title', 'The articles')

@section('content')
    <div class="d-flex flex-row justify-content-between m-1">
        <div class="col-4">
            <h3 class="page-title justify-start fs-2">@yield('title')</h3>
        </div>
       
    </div>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex flex-row justify-content-between m-1">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div id="dataTable_filter" class="dataTables_filter">
                        <input type="search" id="searchInput" class="form-control" placeholder="Research..." aria-controls="dataTable">
                    </div>
                </div>
                <div class="col-4 text-end">
                    <button id="refreshButton" type="button" class="btn btn-outline-primary me-2"><i class='fa fa-refresh'></i> Refresh</button>
                    <a class="btn btn-primary" href="{{ route('admin.article.create')}}"><i class='fa fa-add fw-bold me-1'></i>Add a new article</a>
                </div>

            </div>
            
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-hover table-centered mb-0" id="dataTable">
                        <thead>
                            <tr>
                               <th class="n_">N°
                                    <span class="d-flex flex-row float-right fs-10 mt-1">
                                        <i class="fa fa-arrow-up-long "></i>
                                        <i class="fa fa-arrow-down-long "></i>
                                    </span>
                                </th>
                                <th>Title
                                    <span class="d-flex flex-row float-right fs-10 mt-1">
                                        <i class="fa fa-arrow-up-long "></i>
                                        <i class="fa fa-arrow-down-long "></i>
                                    </span>
                                </th>
                                 <th>Description
                                    <span class="d-flex flex-row float-right fs-10 mt-1">
                                        <i class="fa fa-arrow-up-long "></i>
                                        <i class="fa fa-arrow-down-long "></i>
                                    </span>
                                </th>
                                <th>Content
                                    <span class="d-flex flex-row float-right fs-10 mt-1">
                                        <i class="fa fa-arrow-up-long "></i>
                                        <i class="fa fa-arrow-down-long "></i>
                                    </span>
                                </th>
                                <th>Photo</th>                          
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @foreach ($articles as $k => $article)
                                <tr>
                                    <td>{{$k+1}} </td>
                                    <td>{{$article->title}} </td>
                                    <td>{{substr($article->description, 0, 10)}}... </td>
                                    <td>{{substr($article->content, 0, 15)}}... </td>
                                    <td><img width="20px" height="20px" src="{{asset('storage/'.$article->photo)}}" alt="Picture"> </td>
                                    <td class="d-flex gap-1 justify-content-end ">
                                        <a href="{{ route('admin.article.show', $article) }}" class="btn btn-secondary "><i class="fa-regular fa-eye"></i></a>
                                        <a href="{{ route('admin.article.edit', $article) }}" class="btn btn-info "><i class="fa-regular fa-pen-to-square"></i></a>
                                        
                                        <!-- Bouton pour déclencher le modal de confirmation -->
                                        <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#confirmationModal{{$k}}">
                                            <i class="fa fa-trash"></i>
                                        </button>

                                        <!-- Modale de confirmation -->
                                        <div class="modal fade" id="confirmationModal{{$k}}" tabindex="-1" aria-labelledby="confirmationModalLabel{{$k}}" aria-hidden="true">
                                            <div class="modal-dialog rounded">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary text-white p-2">
                                                        <h5 class="modal-title" id="confirmationModalLabel{{$k}}">Confirmation of the deletion of the article</h5>
                                                        <button type="button" class="close text-white me-1" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>         
                                                    </div>
                                                    <div class="modal-body d-flex flex-column gap-2 align-items-center">
                                                    <div>
                                                        <?php for ($i=0; $i < 5; $i++) { ?>
                                                            <img width="30px" height="30px" src="{{asset('backend/img/R.gif')}}" alt="" srcset="">
                                                        <?php }?>
                                                    </div>
                                                    <p>Are you sure you want to delete this article ??</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>

                                                        <!-- Formulaire de suppression -->
                                                        <form action="{{ route('admin.article.destroy', $article)}}" method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">Yeah</button>
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
    <!-- /.container-fluid -->
@endsection