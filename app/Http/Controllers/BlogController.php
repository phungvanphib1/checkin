<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        $categories = Categorie::all();
        // $param = [
        //     'blogs' => $blogs,
        //     'categories'=> $categories
        // ];
        return view('blog.index', compact('blogs','categories') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::get();
        $param = [
            'categories' => $categories
        ];
        return view('blog.add',$param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id'=> 'required'
        ]);
        $blogs = new Blog();
        $blogs->name = $request->name;
        $blogs->description = $request->description;
        $blogs->category_id = $request->category_id;
        $blogs->save();
        $notification = [
            'message' => 'Added successfully!',
            'alert-type' => 'success'
        ];
        return redirect()->route('blogs.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories = Categorie::get();
        $blogs = Blog::find($id);
        $param = [
            'categories' => $categories,
            'blogs' => $blogs
        ];
        return view('blog.edit', $param);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id'=> 'required'
        ]);
        $blogs = Blog::find($id);
        $blogs->name = $request->name;
        $blogs->description = $request->description;
        $blogs->category_id = $request->category_id;
        $blogs->save();

        $notification = [
            'message' => 'Edited successfully!',
            'alert-type' => 'success'
        ];
        return redirect()->route('blogs.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::find($id);
        $blogs->delete();
    }
}
