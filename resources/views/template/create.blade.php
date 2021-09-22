@extends('template.main_template')

@section('category')

@endsection


@section('content')
    <!-- Главная страница (content) -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h1 style="text-align: center" class="mb-4 mt-5">Добавить книгу</h1>

                <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="ex" class="form-label">Название</label>
                            <input type="text" class="form-control" id="ex" name="title" value= {{ old('title') }}>
                            @error('title')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ex2" class="form-label">Описание</label>
                            <textarea type="text" class="form-control" id="ex2" name="description"  value="Описание"></textarea>

                        </div>
                    <label for="ex2" class="form-label">Автор</label>

                    <select class="form-select" name="author_id">
                    @foreach($authors as $author)
                        <option value="{{$author->id}}">{{$author->name}}</option>
                     @endforeach
                    </select>

                    @error('author_id')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror

                    <div class="mb-3 mt-3">
                        <label for="ex2" class="form-label">Год издания</label>
                        <input type="text" class="form-control" id="ex" name="year" value="2021">
                    </div>

                    <div class="mb-3 mt-3">
                        <input type="file" name="photo">
                    </div>

                        <button type="submit" class="btn btn-secondary mb-5">Submit</button>
                </form>
            </div>
        </div>

    </div><!-- /.container -->
    <!-- end  Главная страница (content) -->
@endsection

<!-- footer -->

