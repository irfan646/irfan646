<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
        $Categories =Category::all();
        return view('admin.categories.index',[
        'Categories' =>$Categories]);
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request){
       $Categories = new Category;

        $Categories::create($request->all());

        return redirect()->route('categories')
            ->with('success','category created successfully.');

    }
    public function edit($id){
        $Categories = Category::where('id',$id)->first();
        return view('admin.categories.edit', ['Categories' => $Categories]);
    }
    public function update(CategoryRequest $request, $id)
    {
        $Categories = Category::find($id);
        $Categories->title = $request->input('title');
        $Categories->save();
        return redirect()->route('categories')
            ->with('success','Category has been updated successfully.');
    }
    public function destroy(Category $Category, $id)
    {
        $Category = $Category::Where('id',$id)->first();
        $Category->delete();
        return redirect()->route('categories')
            ->with('success','Category has been deleted successfully');
    }
}


