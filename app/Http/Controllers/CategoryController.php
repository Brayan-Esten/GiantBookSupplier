<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookCategory;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(Category $category){
        $categories = Category::all();
        $data = BookCategory::with('book')->where('category_id', '=', $category->id)->get();
        return view('books-categorized', compact('categories', 'data', 'category'));
    }
}
