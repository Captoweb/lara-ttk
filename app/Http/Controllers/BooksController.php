<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest as BookRequestAlias;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $books = DB::select('select books.id, books.title,  books.year, books.description, authors.name from books inner join authors on authors.id = books.author_id');
        // dd($books);
        return view('template.home', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $authors = DB::table('authors')->get();
       // dd($authors);
        return view('template.create', ['authors' => $authors]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BookRequestAlias $request)

    {
        Book::create($request->only('title','description','author_id', 'year'));
       // dd($request->all());
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Book $book)
    {
        return view('template.one_book', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Book $book)
    {
        $authors = DB::table('authors')->get();
        // dd($authors);
        return view('template.edit', ['book' => $book, 'authors' => $authors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->only(['title', 'author_id', 'year', 'description']));
       // dd($request->all());
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin');
    }

    public function admin()
    {
       // $books = DB::table('books')->get();
        $books = DB::select('select books.id, books.title,  books.year, books.description, authors.name from books inner join authors on authors.id = books.author_id ORDER BY id DESC');
       // dd($books);
        return view('template.admin', ['books' => $books]);
    }

    public function create_author()
    {
        return view('template.create_author');
    }

    public function store_author(Request  $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);

        $author = DB::table('authors')->insert([
            'name' => $_POST['name'],
            'country' => $_POST['country'],
           ]);

        return redirect()->route('admin');
    }

    public function author()
    {
         $authors = DB::table('authors')->get();
         dd($authors);
        return view('template.create_author');
    }
}
