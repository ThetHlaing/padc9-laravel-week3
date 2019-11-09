<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReview;
use App\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function index()
    {
        $reviews = ProductReview::get();
        //$reviews = \DB::table('product_reviews')->get();
        return view('index', compact('reviews'));
    }

    public function create()
    {
        return view('create');
    }

    public function show(ProductReview $review)
    {
        //dd($review);
        //$review = ProductReview::find($id);
        //$review = \DB::table('product_reviews')->where('id', $id)->first();

        // if (!$review) {
        //     abort(404);
        // }
        return view('detail', compact('review'));
    }

    public function store(StoreReview $request)
    {

        // $review = new ProductReview();
        // $review->product_name = $request->product_name;
        // $review->review = $request->review;
        // $review->save();

        $request_data = $request->all();
        unset($request_data['_token']);

        $result =  ProductReview::create($request_data);
        //$result = \DB::table('product_reviews')->insert($request_data);

        if ($result) {
            return redirect()->route('product_review.home');
        }
    }
    public function edit(ProductReview $review)
    {
        //$review  = \DB::table('product_reviews')->where('id', '=', $id)->first();

        return view('edit', compact('review'));
    }

    public function update(StoreReview $request, ProductReview $review)
    {
        $request_product = $request->all();
        unset($request_product['_token']);

        $result = $review->update($request_product);

        if ($result) {
            return redirect()->route('product_review.show', ['id' => $review->id]);
        }
    }
    public function upvote(ProductReview $review)
    {
        $review->increment('votes');

        return redirect()->back();
    }

    public function downvote(ProductReview $review)
    {
        $review->decrement('votes');

        return redirect()->back();
    }
}
