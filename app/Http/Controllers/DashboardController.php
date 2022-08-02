<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Comment;
use App\User;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Dashboard';
        $kategori = Category::all();
        $book = Book::where('is_verify', 1)->orderBy('view_count','desc')->limit(8)->get();
        $books = Book::get()->count();
        $categories = Category::get()->count();
        $anggota = User::where('role_id', 2)->count();
        $comment = Comment::get()->count();
        $ip = $request->ip();
        $count = Visitor::where('ip_visitor', $ip)->whereDay('created_at', '=', date('d'))->count();
        if ($count == 0) {
            Visitor::insert([
                'ip_visitor' => $ip,
                'created_at' => date('Y-m-d H:i:s')
            ]);
        }

        $data = Visitor::orderBy('created_at', 'desc')->get();
        $hari_ini = Visitor::whereDay('created_at', '=', date('d'))->count();
        $bulan_ini = Visitor::whereMonth('created_at', '=', date('m'))->count();
        $tahun_ini = Visitor::whereYear('created_at', '=', date('Y'))->count();
        $lk= User::where('jk',['L'])->count();
        $pr = User::where('jk',['P'])->count();
        
        return view('dashboard.index', compact('title','kategori','book','ip','data','books','categories','anggota','hari_ini','bulan_ini','tahun_ini','comment','lk','pr'));
    }
}
