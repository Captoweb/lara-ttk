@extends('template.main_template')

@section('category')

@endsection


@section('content')
    <!-- Главная страница (content) -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h1 style="text-align: center" class="mb-4 mt-5">Добавить автора</h1>

                <form action="{{ route('store_author') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="ex" class="form-label">Имя автора</label>
                        <input type="text" class="form-control" id="ex" name="name" value= {{ old('title') }}>
                        @error('name')
                          <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ex2" class="form-label">Страна</label>
                        <input type="text" class="form-control" id="ex2" name="country">
                    </div>

                    <button type="submit" class="btn btn-secondary mb-5">Submit</button>
                </form>
            </div>
        </div>
<br>
<br>
<br>

    </div><!-- /.container -->
    <!-- end  Главная страница (content) -->
@endsection

<!-- footer -->


