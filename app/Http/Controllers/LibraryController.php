<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CD;
use App\Models\FinalYearProject;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->get('sort', 'asc');

        //Mengambil semua data dari tiap kategori
        $book = Book::orderBy('title', $sort)->get();
        $cd = CD::orderBy('title', $sort)->get();
        $newspaper = Newspaper::orderBy('title', $sort)->get();
        $final_year_project = FinalYearProject::orderBy('title', $sort)->get();

        return view('library.index', compact('book', 'cd', 'newspaper', 'final_year_project', 'sort'));
    }
}
