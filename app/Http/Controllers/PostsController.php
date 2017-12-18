<?php

namespace App\Http\Controllers;

use App\Post;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function singleRow($id)
    {
        return $post = Post::where('id', $id)->first();
    }

    public function index()
    {
        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function delete($id)
    {
        DB::table('comments')->where('post_id', $id)->delete();
        $this->singleRow($id)->delete();
        return redirect('/');
    }

    public function showEdit($id)
    {
        $post = $this->singleRow($id);
        return view('posts.edit', compact('post'));
    }

    public function edit(Request $request, $id)
    {
        $image = DB::table('posts')->where('id', $id)->first()->img;
        $filename = public_path() . '/img/' . $image;
        File::delete($filename);

        $post = $this->singleRow($id);
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $fileName);
            Post::whereId($id)->update([
                'body' => request('body'),
                'title' => request('title'),
                'img' => $fileName
            ]);
        }
        return redirect('/');
    }

    public
    function store(Request $request)
    {
        $this->validate(
            request(), [
            'title' => 'required',
            'img' => 'required',
            'body' => 'required'
        ]);


        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $fileName);
        }


        Post::create([
            'user_id' => auth()->id(),
            'body' => request('body'),
            'title' => request('title'),
            'img' => $fileName
        ]);

        session()->flash('message', 'your post has been published');
        return redirect('/');

    }
}