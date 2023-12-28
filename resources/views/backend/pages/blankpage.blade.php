@extends('backend.home')

@section('content')

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="text-center">
                <h4>Welcome to the <strong class="text-gray-800 fs-2 ">Blank Page</strong></h4>
                <a href="{{route('dashboard')}}">← Back to Dashboard</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
<!-- End of Main Content -->
</div>

@endsection