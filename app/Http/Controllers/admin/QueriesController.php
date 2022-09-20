<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Queries\QueriesRequest;
use Illuminate\Http\Request;
use App\Models\Querie;
class QueriesController extends Controller
{
    public function index()
    {
        $Queries = Querie::all();
        return view('admin.queries.index', [
            'Queries' => $Queries
        ]);
    }

    public function create()
    {
        return view('admin.queries.create');
    }

    public function store(QueriesRequest $request)
    {
        Querie::create($request->all());

        return redirect()->route('queries')
            ->with('success', 'queries created successfully.');
    }
    public function edit($id){
        $Pages = Page::where('id',$id)->first();
        return view('admin.pages.edit', [
            'Pages'=> $Pages
        ]);
    }

    public function update(QueriesRequest $request, $id)
    {
        $queries = Querie::find($id);
        $queries->phone = $request->input('phone');
        $queries->email = $request->input('email');
        $queries->messages = $request->input('messages');
        $queries->save();
        return redirect()->route('queries')
            ->with('success','queries has been updated successfully.');
    }
    public function destroy(Querie $Querie, $id)
    {
        $Queries = $Querie::Where('id',$id)->first();
        $Querie->delete();
        return redirect()->route('Queries')
            ->with('success','queries has been deleted successfully');
    }
}
