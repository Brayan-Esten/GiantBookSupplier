<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;

class PublisherController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('publishers', compact('categories', 'publishers'));
    }

    public function detail(Publisher $publisher){
        $categories = Category::all();
        return view('publisher-detail', compact('categories', 'publisher'));
    }

}
