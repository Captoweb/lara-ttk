<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
       $books = DB::select('select books.title, books.description, authors.name from books inner join authors on authors.id = books.author_id');
      // dd($books);
      //  return view('template.home');
    }


    public function create() // работает, как то надо передавать айди автора, может через селект?
    {
        // можно циклом инсерт сделать - сразу 10 штук например
//        for($i = 0; $i < 10; $i++) {
//            DB::table('books')->insert([
//            'title' => 'bew book',
//            'author_id' => 2,
//            'description' => 'text of description' . $i,
//            ]);
//        }

        return view('template.create');
    }
}



