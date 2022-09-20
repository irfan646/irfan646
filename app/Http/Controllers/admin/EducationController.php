<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Education\EducationRequest;
use Illuminate\Http\Request;
use App\Models\Education;
class EducationController extends Controller
{
    public function index()
    {
        $Education = Education::all();
        return view('admin.education.index', [
            'Education' => $Education
        ]);
    }
    public function create(){
        return view('admin.education.create');
    }
    public function store(EducationRequest $request){
        Education::create($request->all());
        return redirect()->route('education')
            ->with('success','Education created successfully.');
    }

    public function edit($id){
        $Education = Education::where('id',$id)->first();
        return view('admin.education.edit', [
            'Education' => $Education
        ]);
    }

    public function update(EducationRequest $request, $id)
    {

        $Education = Education::find($id);
        $Education->course = $request->input('course');
        $Education->description = $request->input('description');
        $Education->school = $request->input('school');
        $Education->starting_date = $request->input('starting_date');
        $Education->end_date = $request->input('end_date');
        $Education->save();
        return redirect()->route('education')
            ->with('success','Education has been updated successfully.');
    }
    public function destroy(Education $Education, $id)
    {
        $Education = $Education::Where('id',$id)->first();
        $Education->delete();
        return redirect()->route('education')
            ->with('success','Education has been deleted successfully');
    }
}
