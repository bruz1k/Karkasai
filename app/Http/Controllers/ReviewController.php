<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::all();
        foreach($reviews as $review)
        {
            $rew = $review->get();
        }
        return view('reviews',compact('reviews') );
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'rating'=>'required|numeric',
            'comments'=>'required|string',
            'products_id'=>'required|numeric',
            'users_id'=>'required|numeric',
        ]);
        $review = new Review(
            [
                "rating" =>$fields["rating"],
                "comments"=>$fields["comments"],
                "products_id"=>$fields["products_id"],
                "users_id"=>$fields["users_id"],

            ]
        );
            if($review->save()) return response($review,201);
                return response('',409);
    }

}
