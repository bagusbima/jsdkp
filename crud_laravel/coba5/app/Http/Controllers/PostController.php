<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class PostController extends Controller
{
    public function index()
    {
        $data_postingan = Post::all();
        return view('posts.index', [
            'judul' => 'HALAMAN POST',
            'data_postingan' => $data_postingan,
        ]);
    }

    public function tambah_posts()
    {
        return view('posts.create'); 
    }

    public function simpan_post(Request $request)
    {
        $title = $request['title'];
        $content = $request['content'];

        $post = new Post();
        $post -> title = $title;
        $post -> content = $content;
        $post -> save();

        return redirect('/Posts');
    }

    public function edit_post($id)
    {
        $post = Post::where('id', $id)->first();
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update_posts(Request $request, $id)
    {
        $post = Post::where('id', $id) -> first();
        $post -> title = $request['title'];
        $post -> content = $request['content'];
        $post -> save();

        return redirect('/Posts');
    }

    public function delete_post($id)
    {
        $post = Post::where('id', $id) -> first();
        $post -> delete();

        return redirect('/Posts');
    }
}
