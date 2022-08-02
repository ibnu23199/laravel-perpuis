<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $cari = $request->input('search');
        $search = Book::where('judul', 'LIKE', "%$cari%")->where('is_verify', 1)->paginate(8);
        $title = "Mencari: $cari";
        $kategori = Category::all();
        return view('search', compact('cari', 'search', 'title','kategori'));
    }
}
