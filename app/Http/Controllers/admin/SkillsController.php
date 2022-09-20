<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skills\SkillsRequest;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function index(){
        $Skills =Skill::all();
        return view('admin.skills.index', [
            'Skills' => $Skills
        ]);
    }
    public function create(){
        return view('admin.skills.create');
    }
    public function store(SkillsRequest $request){
        Skill::create($request->all());
        return redirect()->route('skills')
            ->with('success','skill created successfully.');
    }

    public function edit($id){
        $Skills = Skill::where('id',$id)->first();
        return view('admin.skills.edit', [
            'Skills'=> $Skills
        ]);
    }

    public function update(SkillsRequest $request, $id)
    {
        $Skills = Skill::find($id);
        $Skills->title = $request->input('title');
        $Skills->description = $request->input('description');
        $Skills->save();
        return redirect()->route('skills')
            ->with('success','Skill has been updated successfully.');
    }
    public function destroy(Skill $Skill, $id)
    {
        $Skill = $Skill::Where('id',$id)->first();
        $Skill->delete();
        return redirect()->route('skills')
            ->with('success','Skill has been deleted successfully');
    }
}
