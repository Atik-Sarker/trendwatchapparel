<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.*', 'categories.name')
            ->get();

        //    $post = Post::all();
        // return $post->Category->name;

        return view('backEnd.post.show', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = Category::all();
        return view('backEnd.post.create', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'status' => 'required|Boolean',
            'image' => 'required|image',
            'category' => 'required|numeric'
        ]);

        if($request->hasFile('image')){

            $path = $request->file('image')->store('product');
            
        }
         $product = new Post();
         $product->category_id = $request->category;
         $product->status = $request->status;
         $product->image = $path;
         $product->save();

        Toastr::success('create Successfully!', 'Notification');
        return redirect(route('post.manage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $product = Post::findOrFail($id);
        $product->status = $request->status;
        $product->save();

        Toastr::success('Status Update Successfully!', 'Notification');
        return redirect(route('post.manage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::findOrFail($id);
        return view('backEnd.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|Boolean',
            'category' => 'required|numeric'
        ]);
        $product = Post::findOrFail($id);

        if($request->hasFile('image'))
        {
            if (file_exists(storage_path("app/public/{$product->image}")))
            {
                unlink(storage_path("app/public/{$product->image}"));
            } 
                $path = $request->file('image')->store('product');
                $product->image = $path;
                $product->status = $request->status;
                $product->category_id = $request->category;
                $product->save();
                Toastr::success('update Successfully!', 'Notification');
                return redirect(route('post.manage'));
        }
        $product->status = $request->status;
        $product->category_id = $request->category;
        $product->save();

        Toastr::success('update Successfully!', 'Notification');
        return redirect(route('post.manage'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Post::findOrFail($id);

        if (file_exists(storage_path("app/public/{$product->image}")))
            {
                unlink(storage_path("app/public/{$product->image}"));
            }
            Post::findOrFail($id)->delete();
            Toastr::success('delete Successfully!', 'Notification');
            return redirect(route('post.manage'));
    }
}
