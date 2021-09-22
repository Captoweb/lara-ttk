<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="style.css">
    <title>new project</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d5d5d5;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/admin')}}">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@section('category')
<!--  Category  -->
<div class="container mt-3">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Cat 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cat 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cat 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Cat 4</a>
        </li>
    </ul>
</div><!-- /.container -->
@endsection
@yield('category')


@yield('content')


<!-- footer -->
@section('footer')
<ul class="nav justify-content-center pt-3 pb-5" style="background-color: #d5d5d5;">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Ссылка</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Ссылка</a>
    </li>
</ul>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
@endsection
@yield('footer')
