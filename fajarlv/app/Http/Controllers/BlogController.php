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

    function show($id)
    {
        //->where('id', $id) artinya "kita mau nyari id di fariable $id. dan ->get() untuk mndapetin data itu (array).
        $blog = DB::table('blogs')->where('id', $id)->first();
        if (!$blog) {
            abort(404);
        };
        return view('blog-detail', ['blog' => $blog]);
    }

    function edit($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->first();
        if (!$blog) {
            abort(404);
        }
        return view('blog-edit', ['blog' => $blog]);
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title,' . $id . '|max:255',
            'description' => 'required'
        ]);
        //untuk mendapatkan inputan dr user
        // return $request->all();
        DB::table('blogs')->where('id', $id)->update([
            //apa yg mau diisi
            'title' => $request->title,
            'description' => $request->description
        ]);
        Session::flash('message', 'Blog Succesfully updated!');
        return redirect()->route('blog');
    }
    function delete($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->delete();
        Session::flash('message', 'Blog Succesfully Deleted!');
        return redirect()->route('blog');
    }
}
