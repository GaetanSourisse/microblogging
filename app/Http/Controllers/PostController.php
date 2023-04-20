<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //On récupère tous les Post
        $posts = Post::all();

        // dd($posts);

        // On transmet les Post à la vue
        return view("post.index", compact("posts"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Création de nouveaux posts
        return view("post.create", compact("posts"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //On récupère tous les Post
        $posts = Post::all();

        // dd($posts);

        // On transmet les Post à la vue
        return view("dashboard", compact("posts"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function myPosts()
    {
        $user = Auth::user(); // Get the authenticated user
        $postsUser = $user->posts; // Get all posts by the authenticated user
        return view('', compact('postsUser'));
    }
}