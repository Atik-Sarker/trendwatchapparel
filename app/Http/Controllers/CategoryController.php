<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
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
        $categories =  Category::orderBy('created_at', 'desc')->get();
        return view('backEnd.category.show', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.category.create');
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
            'category' => 'required|string|min:2',
            'status'   => 'required|boolean',
        ]);
        $category = new Category();
        $category->name = $request->category;
        $category->status = $request->status;
        $category->save();

        Toastr::success('Create Successfully!', 'Notification');
        return redirect(route('category.manage'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        $product = Category::findOrFail($id);
        $product->status = $request->status;
        $product->save();

        Toastr::success('Status Update Successfully!', 'Notification');
        return redirect(route('category.manage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backEnd.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|min:2',
            'status'   => 'required|Boolean',
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->category;
        $category->status = $request->status;
        $category->save();

        Toastr::success('update Successfully!', 'Notification');
        return redirect(route('category.manage'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Category::findOrFail($id)->delete();
        Toastr::success('update Successfully!', 'Notification');
        return redirect(route('category.manage'));
    }
}
