<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\PageRequest;
use App\Models\Page;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index(){
        $Pages =Page::all();
        return view('admin.pages.index', [
            'Pages'=> $Pages
        ]);
    }
    public function create(){
        return view('admin.pages.create');
    }
    public function store(PageRequest $request){
        Page::create($request->all());

        return redirect()->route('pages')
            ->with('success','page created successfully.');
    }
    public function edit($id){
        $Pages = Page::where('id',$id)->first();
        return view('admin.pages.edit', [
            'Pages'=> $Pages
        ]);
    }

    public function update(PageRequest $request, $id)
    {
        $Pages = Page::find($id);
        $Pages->title = $request->input('title');
        $Pages->description = $request->input('description');
        $Pages->save();
        return redirect()->route('pages')
            ->with('success','Page has been updated successfully.');
    }
    public function destroy(Page $Page, $id)
    {
        $Page = $Page::Where('id',$id)->first();
        $Page->delete();
        return redirect()->route('pages')
            ->with('success','Page has been deleted successfully');
    }
}
