<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/costom.css')}}" rel="stylesheet">

    <script src="{{asset('backend/fontawesome/js/all.js')}}"></script>
    
</head>

<body class="bg-gradient-primary">

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-10 m-auto">
                <div class="card">
                    <div class="card-body p-5 ">
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-profile-information-form')
                                    </div>
                                </div>

                                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.update-password-form')
                                    </div>
                                </div>

                                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                    <div class="max-w-xl">
                                        @include('profile.partials.delete-user-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>