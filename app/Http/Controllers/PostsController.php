<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return view('blog.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
    
        // Sanitize the title to remove spaces and special characters
        $sanitizedTitle = preg_replace('/[^a-zA-Z0-9]/', '-', $request->title);
    
        // Generate a unique image name
        $newImageName = uniqid() . '-' . $sanitizedTitle . '.' . $request->image->extension();
    
        // Move the uploaded image to the public/images directory
        $request->image->move(public_path('images'), $newImageName);
    
        // Create the post
        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $newImageName, // Save only the image name
            'user_id' => auth()->user()->id
        ]);
    
        return redirect('/blog')
            ->with('message', 'Your post has been added!');
    }
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    public function edit($slug)
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    public function update(Request $request, $slug)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|mimes:jpg,png,jpeg|max:5048' // Make image optional
    ]);

    // Find the post
    $post = Post::where('slug', $slug)->first();

    // Regenerate the slug only if the title has changed
    $newSlug = $post->slug; // Default to the existing slug
    if ($request->title !== $post->title) {
        $newSlug = SlugService::createSlug(Post::class, 'slug', $request->title);
    }

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($post->image_path && file_exists(public_path('images/' . $post->image_path))) {
            unlink(public_path('images/' . $post->image_path)); // Delete the old image
        }

        // Generate a unique image name
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        // Move the uploaded image to the public/images directory
        $request->image->move(public_path('images'), $newImageName);

        // Update the image path in the database
        $post->image_path = $newImageName;
    }

    // Update the post
    $post->update([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'slug' => $newSlug, // Use the existing or new slug
        'image_path' => $post->image_path, // Update the image path if a new image was uploaded
        'user_id' => auth()->user()->id
    ]);

    return redirect('/blog')
        ->with('message', 'Your post has been updated!');
}

    public function destroy($slug)
    {
        $post = Post::where('slug', $slug);
        $post->delete();

        return redirect('/blog')
            ->with('message', 'Your post has been deleted!');
    }
}