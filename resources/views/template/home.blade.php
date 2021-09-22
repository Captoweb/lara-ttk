@extends('template.main_template')

@section('category')
    @parent
@endsection
@yield('category')

@section('content')
<!-- Главная страница (content) -->
<div class="container mt-3">
    <h1 style="text-align: center" class="mb-4">Каталог книг</h1>

    <div class="row">
        @foreach($books as $book)
        <div class="col-sm">
            <div class="card" style="margin: 5px 4px; background-color: #EDEDED">
                <div class="img-wrapper" style="padding: 25px 45px">
                    <img src="/public/uploads/no-image.jpg" class="card-img-top" alt="..." style="max-height: 180px; width: auto;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">{{$book->name}}</p>
                    <p class="card-text">{{$book->description}}</p>
                    <p class="card-text"></p>
                    <a href="/books/{{$book->id}}" class="btn btn-primary">Подробнее</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <br>
    <br>
</div><!-- /.container -->
<!-- end  Главная страница (content) -->
@endsection

<!-- footer -->

