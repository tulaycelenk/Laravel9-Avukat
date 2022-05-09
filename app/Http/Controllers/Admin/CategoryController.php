<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data=Category::all();
        return view('admin.category.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Category();
        $data->parentid=0;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->status=$request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        /** Categories will be shown */
        return redirect('admin/category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        //
        $data=Category::find($id);
        return view('admin.category.edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        //
        $data=Category::find($id);
        $data->parentid=0;
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->status=$request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        /** Categories will be shown */
        return redirect('admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}