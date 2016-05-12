<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Books;
use App\Http\Requests;

class BooksController extends Controller
{
    public function __construct() {
//        $this->middleware('auth');
    }

    public function index()
    {
        //$books = DB::select('select * from books', []);
        return view('books.index', ['books' => Books::all()]);
    }

    public function about()
    {
        return view('books.about');
    }
}
