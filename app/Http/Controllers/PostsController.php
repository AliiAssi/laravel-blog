<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_posts = Post::all();
        return view('blog.index')->with('posts',
        Post::orderBy('title','ASC')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            "title"=>"required",
            "description"=>'required',
            "image"=>"required|mimes:hpg,png,jped,svg|max:500"
        ]);
        $slug = Str::slug($request->title,'-');

        $new_image_name = uniqid().'-'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('uploaded_img'),$new_image_name);
        Post::create(
            [
                'slug' => $slug,
                'title' => $request->input('title'),
                'description'=>$request->input('description'),
                'image_path' => $new_image_name,
                'user_id' => auth()->user()->id
            ]
        );
        return redirect('/blog');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('blog.show')
        ->with('blog',Post::where('id',$id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('blog.edit')->with('blog',Post::where('id',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slug = Str::slug($request->title,'-');
        if (isset($request->image))
        {
            $new_image_name = uniqid().'-'.$slug.'.'.$request->image->extension();
            $request->image->move(public_path('uploaded_img'),$new_image_name);
            Post::where('id',$id)->update(
                [
                    'slug' => $slug,
                    'title' => $request->input('title'),
                    'description'=>$request->input('description'),
                    'image_path' => $new_image_name,
                    'user_id' => auth()->user()->id
                ]
            );
            return redirect('/blog/'.$id)->with('updated_completed','mission completed ...');
        }
        else
        {
            $slug = Str::slug($request->title,'-');
            Post::where('id',$id)->update(
                [
                    'slug' => $slug,
                    'title' => $request->input('title'),
                    'description'=>$request->input('description'),
                    'user_id' => auth()->user()->id
                ]
            );
            return redirect('/blog/'.$id)->with('updated_completed','mission completed ...');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        if ($post)
        {
            $post->delete();
            return redirect('/blog/')->with('delete','blog deleted ...');
        } 
        /*
        Or Post::where('id',$id)->delete()
        */
    }
}
