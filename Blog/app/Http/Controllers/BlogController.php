<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $blogs = Blog::all();
//        dd($blogs);
        return view('list',compact('blogs'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        return redirect()->route('blog.index');
    }

    public function show($id)
    {
        $blog = DB::table('blogs')->where('id',$id)->first();
        return view('detail',compact('blog'));

    }

    public function edit($id)
    {
        $blog = DB::table('blogs')->where('id',$id)->first();
        return view('update',compact('blog'));

    }

    public function update(Request $request, $id)
    {
        $blog = $request->only('name','title','content');
        DB::table('blogs')->where('id',$id)->update($blog);
        return redirect(route('blog.index'));


    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect(route('blog.index'));

    }
}
