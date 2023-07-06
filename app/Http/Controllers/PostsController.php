<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('index', ['posts' => $posts]);
    }

    public function show(int $id) {
        $post = Post::findOrFail($id);
        return view('post', ['post' => $post]);
    }

    public function store(Request $request) {
        $new_post = new Post();
        $new_post->title = trim(htmlspecialchars($request->title)); 
        $new_post->subtitle = trim(htmlspecialchars($request->subtitle)); 
        $new_post->body = trim(htmlspecialchars($request->body)); 
        $new_post->photo = $request->photo == "" ? "https://i1.sndcdn.com/artworks-KDO3S0M1Jq0wt7e1-pHYjEA-t240x240.jpg" : trim(htmlspecialchars($request->title)); 
        $new_post->author = trim(htmlspecialchars($request->author)); 
        $new_post->author_photo = $request->author_pic == "" ? "https://i.scdn.co/image/ab67616100005174aa77e8f6bdf78483ca69f286" : trim(htmlspecialchars($request->author_pic));
        $new_post->created_at = date('Y-m-d H:i:s');
        $new_post->save();
        return redirect('/')->with("success" , "Post created succesfully!");
    }
}
