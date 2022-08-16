<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\DummyData;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        return view('dashboard.posts.index',[
            'posts'=> Post::where('user_id', auth()->user()->id)->get()
            
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories'=> Category::all(),
         

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id'=>'required',
            'body'=>'required',
            'count' => 'required',
            'unit' => 'required' ,
            'price' => 'required'
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success','New Project Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'post'=> $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post'=> $post,
            'categories'=> Category::all()
        ]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id'=>'required',
            'body'=>'required',
            'unit'=>'required',
            'count'=>'required',
            'price'=>'required'

        ];
        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        $datalama['post_id'] = $post->id;
        $datalama['category_id'] = $post->category_id;
        $datalama['user_id'] = auth()->user()->id;
        $datalama['title'] = $post->title;
        $datalama['count'] = $post->count;
        $datalama['price'] = $post->price;
        $datalama['created_at'] = $post->created_at;
        $datalama['updated_at'] = $post->updated_at;
        DummyData::create($datalama);
       
        Post::where('id', $post->id)
        ->update($validatedData);

        return redirect('/dashboard/posts')->with('success','Project Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success','Project Has Been Deleted!');
    }
}
