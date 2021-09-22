@extends('template.main_template')

@section('content')
    <h2  align="center">Админ панель</h2>
        <div class="container-fluid" style="background-color: #ededed">
            <div class="row">
                <div class="col">

                    <a href="/books/create" class="btn btn-secondary create mb-2">Добавить книгу</a>
                    <a href="/books/create_author" class="btn btn-secondary create mb-2" style="margin-left: 10px">Добавить писателя</a>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Фото</th>
                            <th>Название</th>

                            <th>Краткий текст</th>
                            <th>Автор</th>
                            <th>Год издания</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        @foreach($books as $book)
                            <tbody>
                            <tr>
                                <td>{{$book->id}}</td>
                                <td class="mini_img"> <img src="/public/uploads/no-image2.jpg" class="card-img-top" alt="..." style="max-height: 100px; width: auto;"></td>

                                <td>{{$book->title}}</td>

                                <td>{{$book->description}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->year}}</td>
                                <td>
                                    <a href="/books/{{$book->id}}" class="btn btn-primary">show</a>
                                        <br>
                                    <a href="/books/{{$book->id}}/edit" class="btn btn-warning" style="margin: 2px 0">edit</a>

                                    <form method="post" action="/books/{{$book->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">del</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>

@endsection

