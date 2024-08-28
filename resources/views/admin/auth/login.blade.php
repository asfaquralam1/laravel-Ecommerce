{{-- @extends('admin.master')
@section('page_title', 'Login')
@section('login_select', 'active')
@section('container')
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection --}}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawsome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <title>@yield('page_title')</title>
    <link rel="icon" href="{{ asset('image/favicon.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('image/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/admin/main.css') }}">
</head>

<body>
    <div class="login-form-section" style="background-image: url({{ asset('image/3165.jpg') }})">
        <form class="login-form">
            <h1 class="login-heading">Login</h1>
            <div class="mb-4">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Useremail">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-4">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="mb-3 form-check" style="display: flex;justify-content:space-between">
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" style="background-color: white">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <a href="" style="color: white;">Forget Password</a>
            </div>
            <button type="submit" class="btn btn-primary submit-btn">Login</button>

            <p class="register-text">Dont have account? <a href=""
                    style="color: white;font-weight: bold">Register</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
