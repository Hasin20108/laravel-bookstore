<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function index(){
        //fetch book data
        $books = Book::paginate(10);
        // pass book data to views
        return view('books.index')->with('books',$books);
    }

    public function show($book_id){
        // echo 'book_id = '. $book_id;
        $books = Book::find($book_id);
        return view('books.show')->with('books',$books);
    }
    public function create(){
        // echo 'book_id = '. $book_id;
        return view('books.create');
    }
}
