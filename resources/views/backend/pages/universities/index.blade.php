@extends('backend.home')

@section('title', 'The universities')

@section('content')
     <div class="d-flex flex-row justify-content-between m-1">
        <div><h3 class="page-title justify-start fs-2">@yield('title')</h3></div>
        <div>
            <a class="btn btn-primary" href="{{ route('admin.university.create')}}">Add a new university</a>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-1">
                <h2 class="m-0 font-weight-bold text-primary text-center">List of universities</h2>
            </div>
            
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-bordered table-hover table-centered mb-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Web site link</th>
                                <th>Country</th>
                                <th>Description</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($universities as $k => $university)
                                <tr>
                                    <td>{{$k+1}} </td>
                                    <td>{{$university->name}} </td>
                                    <td>{{$university->email}} </td>
                                    <td>{{$university->link}} </td>
                                    <td>{{$university->country}} </td>
                                    <td>{{substr($university->description, 0, 15)}}... </td>
                                    <td class="d-flex gap-1 justify-content-end ">
                                        <a href="{{ route('admin.university.show', $university) }}" class="btn btn-secondary p-1 py-lg-0 py-0 p-lg-1 fs-4"><i class="fa-regular fa-eye"></i></a>
                                        <a href="{{ route('admin.university.edit', $university) }}" class="btn btn-info p-1 py-lg-0 py-0 p-lg-1 fs-4"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <form action="{{ route('admin.university.destroy', $university)}}" method="post">
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
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection