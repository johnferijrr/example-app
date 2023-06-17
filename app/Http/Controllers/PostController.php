<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostDetailResource;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return PostDetailResource::collection($posts->loadMissing('writer:id,username')); 
    }

    public function show($id) 
    {
        $post = Post::with('writer:id,username')->findOrFail($id);
        return new PostDetailResource($post); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'barang' => 'required|max:255',
            'deskripsi_barang' => 'required',
        ]); 
    
        $request['author'] = Auth::user()->id;
        $post = Post::create($request->all()); 
        return new PostDetailResource($post->loadMissing('writer:id,username')); 
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'barang' => 'required|max:255',
            'deskripsi_barang' => 'required',
        ]); 

        $post = Post::findOrFail($id);
        $post->update($request->all());

        return new PostDetailResource($post->loadMissing('writer:id,username')); 
    }
    
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return new PostDetailResource($post->loadMissing('writer:id,username')); 
    }
}
