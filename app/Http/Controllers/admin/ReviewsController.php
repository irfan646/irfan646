<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reviews\ReviewsRequest;
use Illuminate\Http\Request;
use App\Models\Review;
use Validator;
use Illuminate\Support\Facades\File;

class ReviewsController extends Controller
{
    public function index(){
        $Reviews =Review::all();
        return view('admin.reviews.index', [
            'Reviews' => $Reviews
        ]);
    }
    public function create(){
        return view('admin.reviews.create');
    }
    public function store(ReviewsRequest $request)
    {
        $review = new Review();
        if($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $review->image = $filename;
        }

        $review->title = $request->input('title');
        $review->description = $request->input('description');
        $review->save();
        return redirect()->route('reviews')
            ->with('success','Review has been created successfully.');
    }
    public function edit($id){
        $Reviews = Review::where('id',$id)->first();
        return view('admin.reviews.edit', [
            'Reviews' => $Reviews
        ]);
    }

    public function update(ReviewsRequest $request, $id)
    {
        $review = review::find($id);
        if($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('public/images'), $filename);
            $review->image = $filename;
        }

        $review->title = $request->input('title');
        $review->description = $request->input('description');
        $review->update();
        return redirect()->route('reviews')
            ->with('success','Review has been updated successfully.');
    }
    public function destroy(Review $Review, $id)
    {
        $Review = $Review::Where('id',$id)->first();
        $Review->delete();
        return redirect()->route('reviews')
            ->with('success','review has been deleted successfully');
    }

}
