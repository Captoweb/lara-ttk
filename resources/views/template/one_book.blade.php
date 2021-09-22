@extends('template.main_template')

@section('category')

@endsection


@section('content')
<!-- Страница одного товара (content) -->
<div class="container mt-5">
    <h1 style="text-align: center" class="mb-4">Одна книга</h1>

    <div class="row mb-5"  style="background-color: #EDEDED; padding: 25px; border-radius: .25rem;">
        <div class="col-md-4 gx-5 gy-2 mb-3">
            <img class="img-fluid" src="/public/uploads/no-image.jpg">
        </div>
        <div class="col-md-8 gx-5 gy-2">
            <h2 class="mb-4 mt-4">{{$book->title}}</h2>
            <p>{{$book->description}}</p>
            <p>Год издания: {{$book->year}}</p>
        </div>

    </div>
    <br>
</div><!-- /.container -->
<!-- end Страница одного товара (content) -->
@endsection

<!-- footer -->

