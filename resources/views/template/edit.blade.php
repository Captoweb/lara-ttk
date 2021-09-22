@extends('template.main_template')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1">
                <h1>Редактирование книги</h1>
                <img src="" alt="" style="height: 150px;">

                <form action="/books/{{$book->id}}" method="post" enctype="multipart/form-data">
                    @csrf

                    @method("PUT")
                    <div class="form-group">
                        <label for="name">Название</label>
                        <input type="text" id="name" name="title" class="form-control" value="{{$book->title}}">
                    </div>


                    <div class="form-group">
                        <label for="d_name">Описание</label>
                        <textarea name="description" id="d_name" class="form-control" rows="6">{{$book->description}}</textarea>
                    </div>


               <select class="form-select" name="author_id">
                    @foreach($authors as $author)
         {{--        надо выбрать автора по пост айди и сравнить с автором из селекта   --}}
         {{--        {{$book->author_id}} == {{$author->id}}   --}}
                   @if( $book->author_id == $author->id )
                          <option selected value="{{$author->id}}">{{$author->name}}</option>
                       @else
                          <option value="{{$author->id}}">{{$author->name}}</option>
                   @endif

                     @endforeach
                    </select>

                    <div class="form-group mb-3">
                        <label for="pd">Год публикации</label>
                        <input type="text" id="pd" name="year" class="form-control" value="{{$book->year}}
                            ">
                    </div>

                    <div class="form-control mb-3">
                        <input type="file" name="image">
                    </div>

                    <button type="submit" class="btn btn-warning mb-3">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
