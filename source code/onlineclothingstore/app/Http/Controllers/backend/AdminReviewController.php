<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('backend.reviews', compact('reviews'));
    }

    public function create()
    {
        return view('backend.review-add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Review::create($request->all());
        return redirect()->route('admin.reviews.index')->with('success', 'Review added successfully.');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('backend.review-edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'review' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = Review::findOrFail($id);
        $review->update($request->all());
        return redirect()->route('admin.reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted successfully.');
    }
}