<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    function index(Request $request)
    {
        // return $blogs;
        // dd($blogs);
        // return "Sesuatu";
        $title = $request->title;
        $blogs = DB::table('blogs')->where('title', 'LIKE', '%' . $title . '%')->orderBy('id', 'desc')->Paginate(10);
        // ->orderBy('id', 'desc') agar terbaca dr yg terakhir ditambahkan
        return view('blog', ['dataBlogs' => $blogs, 'title' => $title]);
    }

    function add()
    {
        return view('blog-add');
    }

    function create(Request $request)
    {
        // membuat validasi agar tidak error kalau syarat pengisian form tidak sesuai
        $request->validate([
            'title' => 'required|unique:blogs|max:255',
            'description' => 'required',
        ]);
        //buat query-builder
        DB::table('blogs')->insert([ //ada table 'blog' dan kita akan melakukan insert / penambahan data.
            //akan mengisi column title dan discription
            'title' => $request->title, //kita mau ambil title dari request title
            'description' => $request->description
        ]);

        // membuat session / notif berhasil input
        Session::flash('message', 'New Blog Succesfully Added!');


        //cara agar ketika sdh nambah data kembali ke halaman 'blog'
        return redirect()->route('blog');
    }


}
