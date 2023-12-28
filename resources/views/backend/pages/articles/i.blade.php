<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bold text-primary text-center">List of universities</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-hover table-centered table-bordered mb-0" id="dataTable" width="100%" cellspacing="0">
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
    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->
