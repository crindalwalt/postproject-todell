<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("admin.posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        // handle the data
        $userId = Auth()->user()->id;
        $slug = Str::slug($request->title);
        $status = $request->status ?? "draft";


        // image upload
        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();

            $image->storeAs("postImages", $imageName, "public");

            $imagePath = "storage/postImages/" . $imageName;
        } else {
            $imagePath = null;
        }

        // store to database
        Post::create([
            "title" => $request->title,
            "slug" => $slug,
            "description" => $request->description,
            "user_id" => $userId,
            "status" => $status,
            "image" => $imagePath,
        ]);

        return redirect()->route("posts.index")->with("success", "Post created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("admin.posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view("admin.posts.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // dd($request->all());

        $slug = Str::slug($request->title);
        $userId = Auth::user()->id;
        $status = $request->status ?? "draft";


        if ($request->hasFile("image")) {
            // pic di hy user ny update krni hy

            $image = $request->file("image");
            $imageName = "IMG-" . time() . "." . $image->getClientOriginalExtension();
            $image->storeAs("postImages", $imageName, "public");

            $imagePath = "storage/postImages/" . $imageName;
        } else {
            // pic select ni ki user ny purani use krni hy

            $imagePath = $post->image;
        }



        $post->update([
            "title" => $request->title,
            "slug" => $slug,
            "description" => $request->description,
            "user_id" => $userId,
            "status" => $status,
            "image" => $imagePath,
        ]);

        return redirect()->route("myposts.index")->with("success", "Post updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route("myposts.index")->with("success", "Post deleted successfully.");
    }



    public function myPosts()
    {

        $user = Auth::user();
        $posts = $user->posts;
        return view("admin.posts.my-posts", compact("posts"));
    }
}
