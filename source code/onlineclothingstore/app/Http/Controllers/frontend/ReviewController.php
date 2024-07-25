<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Fetch all reviews
        $reviews = Review::all();

        // Pass reviews to the view
        return view('frontend.reviews', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|integer|between:1,5',
        ]);

        // Store the feedback in the database
        Review::create([
            'review' => $request->review,
            'rating' => $request->rating,
        ]);

        // Flash message for successful submission
        return redirect()->route('reviews.index')->with('success', 'Thank you for your review!');
    }
}
