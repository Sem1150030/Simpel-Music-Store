<?php

namespace App\Http\Controllers;
use App\Models\Review;
use Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function placeReview(Request $request){
        $validated = request()->validate([
        'rating' => 'required|integer|min:1',
        'comment' => 'nullable|string',
        'reviewable_id' => 'required|integer',
        'reviewable_type' => 'required|string'

        ]);
        $rating = (int) $validated['rating'];

        dump($rating);

        $review = Review::create([
            'rating' => $rating,
            'comment' => $validated['comment'] ?? null,
            'user_id' => Auth::id(),
            'reviewable_id' => $validated['reviewable_id'],
            'reviewable_type' => $validated['reviewable_type']
        ]);

        return redirect('/albums'. '/' . $validated['reviewable_id'])->with('success', 'Review Placed!');


    }
}
