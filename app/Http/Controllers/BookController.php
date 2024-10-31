<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Product;
//import return type View
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all books
        $books = Product::latest()->paginate(10);

        //render view with products
        return view('books.index', compact('books'));
    }
}