<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;

class BookController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $books = Book::all();
        return view('home', compact('categories', 'books'));
    }

    public function detail(Book $book){
        $categories = Category::all();
        return view('book-detail', compact('categories', 'book'));
    }

}
